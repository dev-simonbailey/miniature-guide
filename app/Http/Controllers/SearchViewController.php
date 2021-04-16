<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SearchViewController extends Controller {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'search.';

    /**
     * @return Factory|View
     */
     public function order() {
        //$scratchdata = DB::select('SELECT * FROM scratch_table WHERE user = :id', ['id' => Auth::user()->id]);
        $orderdata = DB::select('SELECT * FROM orders');
        return view(self::ROUTEPARENT.__FUNCTION__, compact('orderdata'));
     }

    /**
     * @return Factory|View
     */
    public function uniqueorder(Request $request) {
        if(empty($request->ordernumber)){
            return redirect()->route('search.order');
         } else {
            $orderdata = DB::select('SELECT * FROM orders WHERE ordernumber LIKE :order', ['order' => '%'.$request->ordernumber.'%']);
        }
        return view(self::ROUTEPARENT.'order', compact('orderdata'));
    }

    /**
     * @return Factory|View
     */
    public function by_part() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function customer() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function stock_check() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}
