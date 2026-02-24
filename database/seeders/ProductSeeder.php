<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Diamond Solitaire Ring',
                'description' => 'Classic 1-carat diamond engagement ring in 18k white gold',
                'price' => 2999.99,
                'category' => 'Rings',
                'material' => '18k White Gold',
                'image_url' => 'C:\\xampp\\htdocs\\jewelry-store\\assets\\images\\gold-bangle.jpg',
                'stock_quantity' => 15,
            ],
            [
                'id' => 2,
                'name' => 'Pearl Necklace',
                'description' => 'Elegant freshwater pearl strand necklace, 18 inches',
                'price' => 299.99,
                'category' => 'Necklaces',
                'material' => 'Sterling Silver',
                'image_url' => 'images/pearl-necklace.jpg',
                'stock_quantity' => 25,
            ],
            [
                'id' => 3,
                'name' => 'Gold Hoop Earrings',
                'description' => 'Classic 14k gold hoop earrings, medium size',
                'price' => 189.99,
                'category' => 'Earrings',
                'material' => '14k Gold',
                'image_url' => 'images/gold-hoops.jpg',
                'stock_quantity' => 40,
            ],
            [
                'id' => 4,
                'name' => 'Sapphire Pendant',
                'description' => 'Blue sapphire pendant with diamond accents on white gold chain',
                'price' => 899.99,
                'category' => 'Necklaces',
                'material' => '14k White Gold',
                'image_url' => 'images/sapphire-pendant.jpg',
                'stock_quantity' => 12,
            ],
            [
                'id' => 5,
                'name' => 'Tennis Bracelet',
                'description' => 'Diamond tennis bracelet with 3 carats total weight',
                'price' => 3499.99,
                'category' => 'Bracelets',
                'material' => 'Platinum',
                'image_url' => 'images/tennis-bracelet.jpg',
                'stock_quantity' => 8,
            ],
            [
                'id' => 6,
                'name' => 'Emerald Stud Earrings',
                'description' => 'Natural emerald stud earrings in yellow gold setting',
                'price' => 749.99,
                'category' => 'Earrings',
                'material' => '14k Yellow Gold',
                'image_url' => 'images/emerald-studs.jpg',
                'stock_quantity' => 18,
            ],
            [
                'id' => 7,
                'name' => 'Ruby Cocktail Ring',
                'description' => 'Statement ruby ring surrounded by diamonds',
                'price' => 1899.99,
                'category' => 'Rings',
                'material' => '18k Gold',
                'image_url' => 'images/ruby-ring.jpg',
                'stock_quantity' => 10,
            ],
            [
                'id' => 8,
                'name' => 'Silver Charm Bracelet',
                'description' => 'Sterling silver charm bracelet with 5 charms included',
                'price' => 149.99,
                'category' => 'Bracelets',
                'material' => 'Sterling Silver',
                'image_url' => 'images/charm-bracelet.jpg',
                'stock_quantity' => 30,
            ],
            [
                'id' => 9,
                'name' => 'Rose Gold Watch',
                'description' => 'Elegant rose gold ladies watch with diamond markers',
                'price' => 1299.99,
                'category' => 'Watches',
                'material' => 'Rose Gold',
                'image_url' => 'images/rose-gold-watch.jpg',
                'stock_quantity' => 20,
            ],
            [
                'id' => 10,
                'name' => 'Aquamarine Ring',
                'description' => 'Vintage-style aquamarine ring with filigree details',
                'price' => 599.99,
                'category' => 'Rings',
                'material' => '14k White Gold',
                'image_url' => 'images/aquamarine-ring.jpg',
                'stock_quantity' => 14,
            ],
            [
                'id' => 11,
                'name' => 'Gold Chain Necklace',
                'description' => '20-inch solid gold chain necklace',
                'price' => 449.99,
                'category' => 'Necklaces',
                'material' => '14k Gold',
                'image_url' => 'images/gold-chain.jpg',
                'stock_quantity' => 35,
            ],
            [
                'id' => 12,
                'name' => 'Diamond Stud Earrings',
                'description' => 'Classic diamond stud earrings, 0.5 carat each',
                'price' => 1499.99,
                'category' => 'Earrings',
                'material' => '14k White Gold',
                'image_url' => 'images/diamond-studs.jpg',
                'stock_quantity' => 22,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
