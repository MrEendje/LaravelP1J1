<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $name = "";
    public $description = "";
    public $categoryId = 0;
}