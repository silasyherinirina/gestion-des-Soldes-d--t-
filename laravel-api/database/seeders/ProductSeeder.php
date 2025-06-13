<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Nike Air Force 1',
            'description' => 'Un classique revisité',
            'price' => 120.00,
            'brand' => 'Nike',
            'image' => 'assets/shoes2.png'
        ]);

        Product::create([
            'name' => 'Adidas Superstar',
            'description' => 'Sneaker emblématique',
            'price' => 95.00,
            'brand' => 'Adidas',
            'image' => 'assets/shoes3.png'
        ]);

        Product::create([
            'name' => 'Balenciaga Track',
            'description' => 'Futuriste et mode',
            'price' => 890.00,
            'brand' => 'Balenciaga',
            'image' => 'assets/shoes4.png'
        ]);
    }
}
