<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Vanjaram Meen', 'price' => 450.00],
            ['name' => 'Ayirai Meen', 'price' => 250.00],
            ['name' => 'Sura Meen', 'price' => 300.00],
            ['name' => 'Vavval Meen', 'price' => 280.00],
            ['name' => 'Kendai Meen', 'price' => 200.00],
            ['name' => 'Kola Meen', 'price' => 220.00],
            ['name' => 'Nethili Meen', 'price' => 180.00],
            ['name' => 'Mathi Meen', 'price' => 190.00],
            ['name' => 'Parai Meen', 'price' => 210.00],
            ['name' => 'Kilimeen', 'price' => 260.00],
        ];

        foreach( $products as $product) {
            Product::create($product);
        }
    }
}
