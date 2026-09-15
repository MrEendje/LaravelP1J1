<?php

namespace App\Http\Controllers;

use App\Providers\Products\index;

class ProductController extends Controller
{
    public function index()
    {
        $index = new index();

        return view('products.index', [
            'products' => $index->Index(),
        ]);
    }
}
