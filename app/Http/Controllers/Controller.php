<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user_role;

    public function __construct()
    {
        // Fetch the Site Settings object
        $this->user_role = User::find(Auth::User()->id)->getRoles->get(0)->role;

        view()->share('user_role', $this->user_role);

        //View::share('user_role', );
    }


}
