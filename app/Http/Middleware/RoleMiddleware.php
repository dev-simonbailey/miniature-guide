<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleMiddleware
{
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
            if (Auth::User()->hasRole($role)) {
                return $next($request);
            }
        }
        return view('errors.403');
    }

}
