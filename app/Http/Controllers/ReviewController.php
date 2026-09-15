<?php

namespace App\Http\Controllers;

use App\Providers\Reviews\index;

class ReviewController extends Controller
{
    public function index()
    {
        $index = new index();

        return view('reviews.index', [
            'reviews' => $index->Index(),
        ]);
    }
}
