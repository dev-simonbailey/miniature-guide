<?php

namespace App\Http\Middleware;

use App\Permission;
use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$user_roles)
    {
        foreach($user_roles as $role){
            if (Auth::User()->hasRole($role)) {
                return $next($request);
            }
        }

        abort(403);

    }

}
