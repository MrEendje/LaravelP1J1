<?php

namespace App\Http\Controllers;

use App\Providers\Categories\index;

class CategoryController extends Controller
{
    public function index()
    {
        $index = new index();

        return view('categories.index', [
            'categories' => $index->Index(),
        ]);
    }
}
