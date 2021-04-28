<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Permssions;

class UsersController extends Controller
{

    function index(){

        $permissions = User::find(1)->getPermissions;

        dd($permissions);

        foreach($permissions as $permission){
            dd($permission->operation);
        }
        //return User::find(1))->getPermissions;
    }

}
