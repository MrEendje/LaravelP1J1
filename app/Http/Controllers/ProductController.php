<?php

namespace App\Http\Controllers;
use App\Http\ders\Products\index;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
        $index = new index();
        return $index->Index();
    }
}