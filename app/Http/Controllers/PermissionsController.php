<?php

namespace App\Http\Controllers;

Use App\Roles;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function CheckPermissions($operation){
        return Roles::where('role', Auth::user()->role)->pluck($operation)->first();
    }
}
