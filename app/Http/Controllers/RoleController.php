<?php

namespace App\Http\Controllers;

use App\Providers\Roles\index;

class RoleController extends Controller
{
    public function index()
    {
        $index = new index();
        return $index->Index();
    }
}
