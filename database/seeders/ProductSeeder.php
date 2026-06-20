<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'category_id' => 1,
            'name' => 'Camiseta Overskull',
            'description' => 'Camiseta negra edición limitada',
            'price' => 89.90,
            'stock' => 50,
        ]);
        \App\Models\Product::create([
            'category_id' => 2,
            'name' => 'Gorra Trucker',
            'description' => 'Gorra con malla ajustable',
            'price' => 25.00,
            'stock' => 100,
        ]);
    }
}
