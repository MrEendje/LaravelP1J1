<?php

namespace App\Http\Controllers;

use App\Providers\Prices\index;

class PriceController extends Controller
{
    public function index()
    {
        $index = new index();
        return $index->Index();
    }
}
