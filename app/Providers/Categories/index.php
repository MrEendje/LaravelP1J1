<?php

namespace App\Providers\Categories;

use App\Models\Category;

class index
{
    public function Index()
    {
        $categories = Category::all();

        return $categories->toArray();
    }
}
