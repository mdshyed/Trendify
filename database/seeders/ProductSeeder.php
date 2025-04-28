<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'iPhone 14 Pro',
                'description' => 'Latest iPhone with advanced features',
                'price' => 129900.00, // ₹1,29,900
                'stock' => 50,
                'image' => 'iphone14pro.jpg',
                'is_active' => true
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'description' => 'Premium Android smartphone with S Pen',
                'price' => 124999.00, // ₹1,24,999
                'stock' => 45,
                'image' => 'galaxys23ultra.jpg',
                'is_active' => true
            ],
            [
                'name' => 'MacBook Pro 16"',
                'description' => 'Powerful laptop for professionals',
                'price' => 249900.00, // ₹2,49,900
                'stock' => 30,
                'image' => 'macbookpro.jpg',
                'is_active' => true
            ],
            [
                'name' => 'iPad Air',
                'description' => 'Versatile tablet for work and entertainment',
                'price' => 59900.00, // ₹59,900
                'stock' => 60,
                'image' => 'ipadair.jpg',
                'is_active' => true
            ],
            [
                'name' => 'AirPods Pro',
                'description' => 'Premium wireless earbuds with noise cancellation',
                'price' => 26900.00, // ₹26,900
                'stock' => 100,
                'image' => 'airpodspro.jpg',
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
