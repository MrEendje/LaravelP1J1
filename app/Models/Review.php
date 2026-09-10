<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public $comment = "";
    public $user_id = 0;
    public $product_id = 0;
}
