<?php

namespace App\Http\Controllers;

Use Auth;
Use App\Roles;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReportsViewController extends Controller {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    const ROUTEPARENT = 'reports.';

    /**
     * @return Factory|View
     */
     public function build_schedule() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
     }

    /**
     * @return Factory|View
     */
    public function incoming_builds() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_custom_colour_orders() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function build_outbound_view() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function build_inbound_view() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function pdi_view() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function packing_view() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function completed_bike_orders() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function stock_demand() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function essential_component_shortages() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function expected_non_essential_shortages() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_fast_track_schedule() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function frame_availability() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_overdue_builds() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function mechanic_kpi() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function pdi_stats() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function bike_wip_stats() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }

    /**
     * @return Factory|View
     */
    public function qlik_data() {
        if(Roles::where('role', Auth::user()->role)->pluck('index')->first() == 1) {
            return view(self::ROUTEPARENT.__FUNCTION__);
        } else {
            dd('NOT AUTHORISED');
        }
    }
}
