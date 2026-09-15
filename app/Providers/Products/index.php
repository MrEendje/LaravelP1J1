<?php

namespace App\Providers\Products;

use App\Models\Product;

class index
{
    public function Index()
    {
        $products = Product::all();

        return $products->toArray();
    }
}
