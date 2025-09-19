<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Classic White T-Shirt',
                'description' => 'A comfortable and stylish classic white t-shirt made from 100% organic cotton.',
                'price' => 25.00,
                'quantity' => 50,
                'image_path' => 'products/white-tshirt.png', // Make sure you have this image in your storage folder
            ],
            [
                'name' => 'Denim Blue Jeans',
                'description' => 'High-quality, durable denim jeans with a modern slim fit. Perfect for any occasion.',
                'price' => 75.50,
                'quantity' => 30,
                'image_path' => 'products/blue-jeans.png',
            ],
            [
                'name' => 'Casual Hoodie',
                'description' => 'Soft and warm pullover hoodie with a front pocket and adjustable drawstring.',
                'price' => 45.00,
                'quantity' => 20,
                'image_path' => 'products/casual-hoodie.png',
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'sku' => 'SKU-' . Str::upper(Str::random(5)),
                'quantity' => $product['quantity'],
                'image_path' => $product['image_path'],
                'is_active' => true,
            ]);
        }
    }
}