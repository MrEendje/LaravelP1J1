<?php

namespace App\Http\ders\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class index
{
    public function Index()
    {
        $products = DB::table('products')->get();

        return view('products.Index', ['products' => $products]);
    }
}