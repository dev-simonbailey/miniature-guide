<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DashboardViewController extends Controller {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'dashboard.';
    /**
     * @return Factory|View
     */
     public function bike_wip() {
         return view(self::ROUTEPARENT.__FUNCTION__);
     }

    /**
     * @return Factory|View
     */
    public function pac_wip() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function pick_wip() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function returns() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}
