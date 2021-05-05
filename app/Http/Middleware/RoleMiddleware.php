<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleMiddleware
{

    public $found = false;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$user_roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$user_roles)
    {
        foreach($user_roles as $role){
            if (Auth::User()->hasRole(trim($role))) {
                return $next($request);
            }
        }
        abort('403');
    }
}
