<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PermissionsController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReportsController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->isAuth = new PermissionsController();
        $path = explode('\\', __CLASS__);
        $this->opName = strtolower(str_replace('Controller', '', array_pop($path)));
    }

    /**
     * @return Factory|View
     */
    public function build_schedule()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function incoming_builds()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_custom_colour_orders()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function build_outbound()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function build_inbound()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function pdi()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function packing()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function shipped_bikes()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function stock_demand()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function essential_component_shortages()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function expected_non_essential_shortages()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_fast_track_schedule()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function frame_availability()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function wip_overdue_builds()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function mechanic_kpi()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function pdi_stats()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function bike_wip_stats()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }

    /**
     * @return Factory|View
     */
    public function qlik_data()
    {
        if ($this->isAuth->CheckPermissions('index')) {
            return view($this->opName . '.' . __FUNCTION__);
        } else {
            return view('errors.403');
        }
    }
}
