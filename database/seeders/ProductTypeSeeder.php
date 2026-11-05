<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $producttypes = [
            'Book',
            'CD',
            'Game',
        ];

        foreach ($producttypes as $producttype) {
            ProductType::create([
                'type' => $producttype,
            ]);
        }
    }
}
