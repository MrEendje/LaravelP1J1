<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        Price::create([
            'price' => 899.99,
            'effdate' => '2026-01-01',
            'productid' => 1,
        ]);
        Price::create([
            'price' => 849.99,
            'effdate' => '2026-06-01',
            'productid' => 1,
        ]);
        Price::create([
            'price' => 79.95,
            'effdate' => '2026-01-01',
            'productid' => 2,
        ]);
        Price::create([
            'price' => 14.50,
            'effdate' => '2026-01-01',
            'productid' => 3,
        ]);
        Price::create([
            'price' => 9.99,
            'effdate' => '2026-01-01',
            'productid' => 4,
        ]);
    }
}
