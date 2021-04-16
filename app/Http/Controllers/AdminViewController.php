<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminViewController extends Controller {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'admin.';
    /**
     * @return Factory|View
     */
     public function knowledge_base() {
         return view(self::ROUTEPARENT.__FUNCTION__);
     }

    /**
     * @return Factory|View
     */
    public function ilog_add() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}
