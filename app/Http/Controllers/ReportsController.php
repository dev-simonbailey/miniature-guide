<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\Factory;
use Illuminate\View\View;

class ReportsController extends Controller
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
    public function build_schedule()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function incoming_builds()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_custom_colour_orders()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function build_outbound()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function build_inbound()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function pdi()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function packing()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function shipped_bikes()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function stock_demand()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function essential_component_shortages()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function expected_non_essential_shortages()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_fast_track_schedule()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function frame_availability()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function wip_overdue_builds()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function mechanic_kpi()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function pdi_stats()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function bike_wip_stats()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }

    /**
     * @return Factory|View
     */
    public function qlik_data()
    {
        return view($this->opName . '.' . __FUNCTION__);
    }
}
