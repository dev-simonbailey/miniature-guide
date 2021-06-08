<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\Factory;
use Illuminate\View\View;

class HelpViewController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'help.';

    /**
     * @return Factory|View
     */
    public function index()
    {
        return view(self::ROUTEPARENT . __FUNCTION__);
    }
}
