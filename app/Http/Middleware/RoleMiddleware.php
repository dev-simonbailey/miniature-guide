<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleMiddleware
{

    public $found = false;

    /**
     * Handle an incoming request and check if the user has the correct role level
     *
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$user_roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$user_roles)
    {
        if (\Auth::check()) {
            foreach ($user_roles as $role) {
                if (Auth::User()->hasRole(trim($role))) {
                    return $next($request);
                }
            }
            abort('403');
        }
        return redirect('/login');
    }
}
