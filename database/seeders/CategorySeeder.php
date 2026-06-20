<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name' => 'Ropa',
            'description' => 'Prendas de vestir en general',
        ]);
        \App\Models\Category::create([
            'name' => 'Accesorios',
            'description' => 'Accesorios y complementos',
        ]);
    }
}
