<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use App\User;
use App\Roles;
use App\Permissions;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
