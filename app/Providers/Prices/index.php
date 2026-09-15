<?php

namespace App\Providers\Prices;

use App\Models\Price;

class index
{
    public function Index()
    {
        $prices = Price::all();

        return $prices->toArray();
    }
}
