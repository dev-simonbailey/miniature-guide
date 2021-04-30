<?php

namespace App\Providers;

use App\Permission;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param Gate $gate
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        foreach ($this->getPermission() as $permission) {
            $gate->define($permission->name, function (User $user) use ($permission) {
                return count($permission->roles) && $user->hasRole($permission->roles);
            });
        }
    }

    protected function getPermission()
    {
        return Permission::with('roles')->get();
    }
}
