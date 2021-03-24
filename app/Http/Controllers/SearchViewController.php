<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SearchViewController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'search.';
    /**
     * @return Factory|View
     */
     public function order(){
         return view(self::ROUTEPARENT.__FUNCTION__);
     }
    /**
     * @return Factory|View
     */
    public function by_part(){
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
    /**
     * @return Factory|View
     */
    public function customer(){
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
    /**
     * @return Factory|View
     */
    public function stock_check(){
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}