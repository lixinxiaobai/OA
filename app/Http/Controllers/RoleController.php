<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Bican\Roles\Models\Role;
use App\Models\User;

class RoleController extends Controller
{

    //
    public function index(){
        $adminRole = Role::where('name', '=', 'Admin')->first();
        $user = User::find(2);
        //$user->attachRole($adminRole); // you can pass whole object, or just an id
        if ($user->is('admin')) { // you can pass an id or slug
            echo "admin";
        }
    }
}
