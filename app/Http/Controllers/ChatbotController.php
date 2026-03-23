<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ChatbotController extends Controller
{
    /**
     * Handle a chat message and return an AI-generated reply using OpenAI.
     */
    public function respond(Request $request)
    {
        $data = $request->validate([
            'message' => 'required|string|max:600',
            'history' => 'array',
            'history.*.role' => 'in:user,assistant',
            'history.*.content' => 'string'
        ]);

        $apiKey = config('services.openai.key', env('OPENAI_API_KEY'));
        $model = config('chatbot.model', env('OPENAI_MODEL', 'gpt-4.1-mini'));

        if (!$apiKey) {
            return response()->json([
                'error' => 'OpenAI API key is not configured. Add OPENAI_API_KEY to your .env file.'
            ], 500);
        }

        // Lightweight product context (kept small to control token use)
        $catalog = Product::select('name', 'description', 'category', 'price', 'image_url')
            ->take(config('chatbot.catalog_limit', 20))
            ->get()
            ->map(function ($p) {
                return [
                    'name' => $p->name,
                    'category' => $p->category,
                    'price' => (float) $p->price,
                    'description' => $p->description,
                    'url' => url('/products?product=' . Str::slug($p->name, '-')),
                ];
            })->values()->all();

        $systemPrompt = "You are Skyrose Atelier's shopping assistant. Be concise, warm, and specific. " .
            "Use the provided product catalog JSON to answer availability questions; do not invent items. " .
            "When you mention a product, include its price (GBP) and suggest the URL if available. " .
            "If you don't have an item, offer close matches. Keep replies under 120 words.";

        $messages = [
            ['role' => 'system', 'content' => $systemPrompt],
            ['role' => 'system', 'content' => 'Current catalog: ' . json_encode($catalog)],
        ];

        if (!empty($data['history'])) {
            foreach (array_slice($data['history'], -config('chatbot.max_history', 6)) as $turn) {
                $messages[] = ['role' => $turn['role'], 'content' => $turn['content']];
            }
        }

        $messages[] = ['role' => 'user', 'content' => $data['message']];

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => $model,
                'messages' => $messages,
                'temperature' => 0.4,
                'max_tokens' => 220,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'error' => 'Could not reach OpenAI: ' . $e->getMessage(),
            ], 500);
        }

        if (!$response->ok()) {
            return response()->json([
                'error' => 'OpenAI error: ' . ($response->json('error.message') ?? $response->body()),
            ], $response->status() ?: 500);
        }

        $reply = $response->json('choices.0.message.content');

        return response()->json([
            'reply' => $reply,
        ]);
    }
}
