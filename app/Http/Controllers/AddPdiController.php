<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\Factory;
use Illuminate\View\View;

class AddPdiController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $opName;

    public function __construct()
    {
        $path = explode('\\', __CLASS__);
        $this->opName = strtolower(str_replace('Controller', '', array_pop($path)));
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }
}
