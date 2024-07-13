<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function roles()
    {
        $roles = Role::all();
        return response()->json($roles);
    }
}

