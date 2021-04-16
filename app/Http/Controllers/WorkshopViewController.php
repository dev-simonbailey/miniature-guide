<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkshopViewController extends Controller {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'workshop.';

    /**
     * @return Factory|View
     */
     public function add_inbound_build() {
         return view(self::ROUTEPARENT.__FUNCTION__);
     }

    /**
     * @return Factory|View
     */
    public function add_outbound_build() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function add_pdi() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function add_new_pack() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}
