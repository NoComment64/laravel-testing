<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
        [
        'name' => 'The Jam',
        'title' => 'Modern World',
        'price' => 399,
        'product_type_id' => 2,
        ],
        [
        'name' => 'Amy Winehouse',
        'title' => 'Back to Black',
        'price' => 299,
        'product_type_id' => 2,
        ],
    ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'title' => $product['title'],
                'price' => $product['price'],
                'product_type_id' => $product['product_type_id'],
            ]);
        }
    }
}
