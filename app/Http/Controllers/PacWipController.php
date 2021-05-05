<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\Factory;
use Illuminate\View\View;

class PacWipController extends Controller
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

    /**
     * @return Factory|View
     */
    public function show()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getstore()
    {
        return view('errors.403');
    }
    /**
     * @return Factory|View
     */
    public function store()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function edit()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getupdate()
    {
        return view('errors.403');
    }

    /**
     * @return Factory|View
     */
    public function update()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function delete()
    {
        return view('errors.200');
    }

    /**
     * @return Factory|View
     */
    public function getdestroy()
    {
        return view('errors.403');
    }

    /**
     * @return Factory|View
     */
    public function destroy()
    {
        return view('errors.200');
    }
}
