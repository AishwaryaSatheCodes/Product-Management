<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        
        Product::insert([
            [
                'name' => 'Lavender Scented Candle',
                'description' => 'A soothing lavender candle to relax your mind.',
                'price' => 399.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Organic Green Tea',
                'description' => 'Refreshing organic green tea leaves.',
                'price' => 299.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Handcrafted Ceramic Mug',
                'description' => 'Perfect mug for your morning coffee.',
                'price' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bluetooth Wireless Headphones',
                'description' => 'Experience crisp sound with wireless freedom.',
                'price' => 2499.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Notebook Planner 2025',
                'description' => 'Stay organized with this elegant planner.',
                'price' => 599.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
