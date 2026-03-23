<div id="chatbot-root" aria-live="polite">
    <button id="chatbot-toggle" class="ChatbotToggle" aria-expanded="false" aria-controls="chatbot-panel">
        <span class="ChatbotToggle__dot"></span>
        <span class="ChatbotToggle__label">Chat</span>
    </button>

    <div id="chatbot-panel" class="ChatbotPanel" role="dialog" aria-modal="false" aria-label="Skyrose virtual stylist" hidden>
        <header class="ChatbotHeader">
            <div>
                <p class="ChatbotHeader__eyebrow">Skyrose Concierge</p>
                <p class="ChatbotHeader__title">Ask about sizing, gifts, or shipping</p>
            </div>
            <button type="button" class="ChatbotClose" aria-label="Close chat">×</button>
        </header>

        <div id="chatbot-messages" class="ChatbotMessages" role="log">
            <div class="ChatbotBubble ChatbotBubble--bot">
                Hi! I can help you choose a piece, check stock, or answer delivery questions.
            </div>
        </div>

        <form id="chatbot-form" class="ChatbotForm" autocomplete="off">
            <input id="chatbot-input" type="text" name="message" placeholder="Ask about rings, gifts, delivery…" aria-label="Your message" required />
            <button type="submit" class="ChatbotSend">Send</button>
        </form>
    </div>
</div>

<script>
    window.SKYROSE_CHATBOT = window.SKYROSE_CHATBOT || {};
    window.SKYROSE_CHATBOT.suggestions = @json(\App\Models\Product::select('name')->orderBy('name')->limit(12)->pluck('name'));
</script>
