<?php

namespace App\Providers\Roles;

use App\Models\Role;

class index
{
    public function Index()
    {
        $roles = Role::all();

        return $roles->toArray();
    }
}
