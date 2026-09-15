<?php

namespace App\Providers\Reviews;

use App\Models\Review;

class index
{
    public function Index()
    {
        $reviews = Review::all();

        return $reviews->toArray();
    }
}
