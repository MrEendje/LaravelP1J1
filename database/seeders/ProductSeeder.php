<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Krachtige laptop voor werk en gaming',
            'categoryId' => 1,
        ]);
        Product::create([
            'name' => 'Toetsenbord',
            'description' => 'Mechanisch toetsenbord met RGB verlichting',
            'categoryId' => 1,
        ]);
        Product::create([
            'name' => 'Muismat',
            'description' => 'Anti-slip muismat in diverse kleuren',
            'categoryId' => 2,
        ]);
        Product::create([
            'name' => 'USB-C Kabel',
            'description' => 'Snelle oplaadkabel met USB-C aansluiting',
            'categoryId' => 2,
        ]);
    }
}
