<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'comment' => 'Zeer tevreden met deze laptop!',
            'user_id' => 1,
            'product_id' => 1,
        ]);
        Review::create([
            'comment' => 'Fijn typgevoel, echte aanrader.',
            'user_id' => 2,
            'product_id' => 2,
        ]);
        Review::create([
            'comment' => 'Muismat glijdt lekker soepel.',
            'user_id' => 1,
            'product_id' => 3,
        ]);
        Review::create([
            'comment' => 'Werkt prima, laadt snel op.',
            'user_id' => 2,
            'product_id' => 4,
        ]);
    }
}
