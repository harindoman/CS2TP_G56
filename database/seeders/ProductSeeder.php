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
            [ 'id' => 1, 'name' => 'Diamond Solitaire Ring', 'description' => 'Classic 1-carat diamond engagement ring in 18k white gold', 'price' => 2999.99, 'category' => 'Rings', 'material' => '18k White Gold', 'image_url' => 'images/diamond-ring.jpg', 'stock_quantity' => 15 ],
            [ 'id' => 2, 'name' => 'Pearl Necklace', 'description' => 'Elegant freshwater pearl strand necklace, 18 inches', 'price' => 299.99, 'category' => 'Necklaces', 'material' => 'Sterling Silver', 'image_url' => 'images/pearl-necklace.jpg', 'stock_quantity' => 25 ],
            [ 'id' => 3, 'name' => 'Gold Hoop Earrings', 'description' => 'Classic 14k gold hoop earrings, medium size', 'price' => 189.99, 'category' => 'Earrings', 'material' => '14k Gold', 'image_url' => 'images/gold-hoop.jpg', 'stock_quantity' => 40 ],
            [ 'id' => 4, 'name' => 'Sapphire Pendant', 'description' => 'Blue sapphire pendant with diamond accents on white gold chain', 'price' => 899.99, 'category' => 'Necklaces', 'material' => '14k White Gold', 'image_url' => 'images/saphire-ring.jpg', 'stock_quantity' => 12 ],
            [ 'id' => 5, 'name' => 'Tennis Bracelet', 'description' => 'Diamond tennis bracelet with 3 carats total weight', 'price' => 3499.99, 'category' => 'Bracelets', 'material' => 'Platinum', 'image_url' => 'images/leather-bracelet.jpg', 'stock_quantity' => 8 ],
            [ 'id' => 6, 'name' => 'Emerald Stud Earrings', 'description' => 'Natural emerald stud earrings in yellow gold setting', 'price' => 749.99, 'category' => 'Earrings', 'material' => '14k Yellow Gold', 'image_url' => 'images/diamond-earring.jpg', 'stock_quantity' => 18 ],
            [ 'id' => 7, 'name' => 'Ruby Cocktail Ring', 'description' => 'Statement ruby ring surrounded by diamonds', 'price' => 1899.99, 'category' => 'Rings', 'material' => '18k Gold', 'image_url' => 'images/saphire-ring.jpg', 'stock_quantity' => 10 ],
            [ 'id' => 8, 'name' => 'Silver Charm Bracelet', 'description' => 'Sterling silver charm bracelet with 5 charms included', 'price' => 149.99, 'category' => 'Bracelets', 'material' => 'Sterling Silver', 'image_url' => 'images/charm-bracelet.jpg', 'stock_quantity' => 30 ],
            [ 'id' => 9, 'name' => 'Rose Gold Watch', 'description' => 'Elegant rose gold ladies watch with diamond markers', 'price' => 1299.99, 'category' => 'Watches', 'material' => 'Rose Gold', 'image_url' => 'images/rose-gold.jpg', 'stock_quantity' => 20 ],
            [ 'id' => 10, 'name' => 'Aquamarine Ring', 'description' => 'Vintage-style aquamarine ring with filigree details', 'price' => 599.99, 'category' => 'Rings', 'material' => '14k White Gold', 'image_url' => 'images/vintage-ring.jpg', 'stock_quantity' => 14 ],
            [ 'id' => 11, 'name' => 'Gold Chain Necklace', 'description' => '20-inch solid gold chain necklace', 'price' => 449.99, 'category' => 'Necklaces', 'material' => '14k Gold', 'image_url' => 'images/gold-necklace.jpg', 'stock_quantity' => 35 ],
            [ 'id' => 12, 'name' => 'Diamond Stud Earrings', 'description' => 'Classic diamond stud earrings, 0.5 carat each', 'price' => 1499.99, 'category' => 'Earrings', 'material' => '14k White Gold', 'image_url' => 'images/silver-stud.jpg', 'stock_quantity' => 22 ],
            [ 'id' => 13, 'name' => 'Opal Drop Earrings', 'description' => 'Dazzling opal drop earrings with diamond accents', 'price' => 599.99, 'category' => 'Earrings', 'material' => 'Sterling Silver', 'image_url' => 'images/diamond-earring.jpg', 'stock_quantity' => 16 ],
            [ 'id' => 14, 'name' => 'Platinum Band', 'description' => 'Simple platinum band, comfort fit', 'price' => 799.99, 'category' => 'Rings', 'material' => 'Platinum', 'image_url' => 'images/platinum-band.jpg', 'stock_quantity' => 20 ],
            [ 'id' => 15, 'name' => 'Turquoise Bead Necklace', 'description' => 'Handmade turquoise bead necklace, 22 inches', 'price' => 249.99, 'category' => 'Necklaces', 'material' => 'Turquoise', 'image_url' => 'images/gold-bangle.jpg', 'stock_quantity' => 18 ],
            [ 'id' => 16, 'name' => 'Leather Wrap Bracelet', 'description' => 'Trendy leather wrap bracelet with silver charms', 'price' => 59.99, 'category' => 'Bracelets', 'material' => 'Leather', 'image_url' => 'images/leather-bracelet.jpg', 'stock_quantity' => 25 ],
            [ 'id' => 17, 'name' => 'Citrine Pendant', 'description' => 'Citrine gemstone pendant on gold chain', 'price' => 349.99, 'category' => 'Necklaces', 'material' => '14k Gold', 'image_url' => 'images/citrine-pendant.jpg', 'stock_quantity' => 14 ],
            [ 'id' => 18, 'name' => 'Pearl Stud Earrings', 'description' => 'Classic pearl stud earrings, 8mm', 'price' => 99.99, 'category' => 'Earrings', 'material' => 'Sterling Silver', 'image_url' => 'images/pearl-drop.jpg', 'stock_quantity' => 30 ],
            [ 'id' => 19, 'name' => 'Garnet Statement Ring', 'description' => 'Large garnet ring with intricate silver setting', 'price' => 399.99, 'category' => 'Rings', 'material' => 'Sterling Silver', 'image_url' => 'images/garnet-statement-ring.jpg', 'stock_quantity' => 12 ],
            [ 'id' => 20, 'name' => 'Crystal Bangle', 'description' => 'Sparkling crystal bangle bracelet', 'price' => 79.99, 'category' => 'Bracelets', 'material' => 'Stainless Steel', 'image_url' => 'images/gold-bangle.jpg', 'stock_quantity' => 28 ],
            [ 'id' => 21, 'name' => 'Onyx Cufflinks', 'description' => 'Elegant onyx cufflinks in silver', 'price' => 129.99, 'category' => 'Accessories', 'material' => 'Sterling Silver', 'image_url' => 'images/Rolexwatch.jpg', 'stock_quantity' => 15 ],
            [ 'id' => 22, 'name' => 'Amethyst Tennis Bracelet', 'description' => 'Amethyst tennis bracelet with white sapphires', 'price' => 499.99, 'category' => 'Bracelets', 'material' => 'Sterling Silver', 'image_url' => 'images/BleedingHeartBracelet.png', 'stock_quantity' => 10 ],
            [ 'id' => 23, 'name' => 'Topaz Drop Necklace', 'description' => 'Blue topaz drop necklace on gold chain', 'price' => 299.99, 'category' => 'Necklaces', 'material' => '14k Gold', 'image_url' => 'images/layered-necklace.jpg', 'stock_quantity' => 13 ],
            [ 'id' => 24, 'name' => 'Sapphire Stud Earrings', 'description' => 'Blue sapphire stud earrings in white gold', 'price' => 649.99, 'category' => 'Earrings', 'material' => '14k White Gold', 'image_url' => 'images/ThreadbareEarrings.png', 'stock_quantity' => 17 ],
            [ 'id' => 25, 'name' => 'Rose Quartz Pendant', 'description' => 'Rose quartz pendant with silver chain', 'price' => 199.99, 'category' => 'Necklaces', 'material' => 'Sterling Silver', 'image_url' => 'images/rose-quartz-pendant.webp', 'stock_quantity' => 19 ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
