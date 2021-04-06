<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BlueSky\Scratch;

class SearchViewController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'search.';
    /**
     * @return Factory|View
     */
     public function order(){
        $scratchdata = Scratch::find(Auth::user()->id);

        return view(self::ROUTEPARENT.__FUNCTION__, compact('scratchdata'));
     }

    /**
     * @return Factory|View
     */
    public function uniqueorder(Request $request){
        if(empty($request->order_number)){
            $scratchdata = DB::select('SELECT * FROM scratch_table WHERE user = :id', ['id' => Auth::user()->id]);
         } else {
            $scratchdata = DB::select('SELECT * FROM scratch_table WHERE user = :user AND id = :id', ['user' => Auth::user()->id, 'id' => $request->order_number]);
        }
        return view(self::ROUTEPARENT.'order', compact('scratchdata'));
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
