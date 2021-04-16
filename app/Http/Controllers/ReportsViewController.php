<?php

namespace App\Http\Controllers;

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
         return view(self::ROUTEPARENT.__FUNCTION__);
     }

    /**
     * @return Factory|View
     */
    public function incoming_builds() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_custom_colour_orders() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function build_outbound_view() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function build_inbound_view() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function pdi_view() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function packing_view() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function completed_bike_orders() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function stock_demand() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function essential_component_shortages() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function expected_non_essential_shortages() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_fast_track_schedule() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function frame_availability() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_overdue_builds() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function mechanic_kpi() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function pdi_stats() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function bike_wip_stats() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function qlik_data() {
        return view(self::ROUTEPARENT.__FUNCTION__);
    }
}
