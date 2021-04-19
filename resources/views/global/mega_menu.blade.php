@php
$help       = "/help/";
$search     = "/search/";
$orders     = "/orders/";
$dashboard  = "/dashboard/";
$workshop   = "/workshop/";
$reports    = "/reports/";
@endphp
<nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @if (!Auth::guest())
        <a href="{{Auth::user()->home}}" class="navbar-brand">Bluesky</a>
    @else
        <a href="/" class="navbar-brand">Bluesky</a>
    @endif
    <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ml-auto nav-fill">
            @if (Route::has('login'))
                @auth
                <li class="nav-item px-4">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ Auth::user()->home }}">
                                Home
                            </a>
                            <hr />
                            @if( Auth::user()->role == "admin")
                                <a class="dropdown-item" href="/users/add">
                                    Create User
                                </a>
                                <a class="dropdown-item" href="/users/show">
                                    Registered Users
                                </a>
                                <hr />
                                <a class="dropdown-item" href="/roles/add">
                                    Create Role
                                </a>
                                <a class="dropdown-item" href="/roles/show">
                                    Registered Roles
                                </a>
                                <hr />
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </li>
                @else
                @if(Route::currentRouteName() == 'register')
                    <li class="nav-item px-4">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @endif
                    @if(Route::currentRouteName() == 'login')
                        <li class="nav-item px-4">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
            @auth
            <li class="nav-item px-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
                <a class="dropdown-item" href="/admin/knowledge-base">Knowledge Base</a>
                <a class="dropdown-item" href="/admin/ilog-add">Log Interaction</a>
                @if (auth::user()->role != "none")
                <div class="dropdown-divider"></div>
                <div class="d-md-flex align-items-start justify-content-start">
                    <div>
                        <div class="dropdown-header">Search</div>
                        <a class="dropdown-item" href="{{$orders}}index">Orders</a>
                        <a class="dropdown-item" href="{{$search}}by-part">Orders by Part</a>
                        <a class="dropdown-item" href="{{$search}}customers">Customers</a>
                        <a class="dropdown-item" href="{{$search}}stock-check">Stock Check</a>
                    </div>
                    <div>
                        <div class="dropdown-header">Dashboards</div>
                        <a class="dropdown-item" href="{{$dashboard}}bike-wip">Bike WIP</a>
                        <a class="dropdown-item" href="{{$dashboard}}pac-wip">PAC WIP</a>
                        <a class="dropdown-item" href="{{$dashboard}}pick-wip">Pick WIP</a>
                        <a class="dropdown-item" href="{{$dashboard}}returns">Returns</a>
                    </div>
                    <div>
                        <div class="dropdown-header">Workshop</div>
                        <a class="dropdown-item" href="{{$workshop}}add-inbound-build">Add Inbound Build</a>
                        <a class="dropdown-item" href="{{$workshop}}add-outbound-build">Add Outbound Build</a>
                        <a class="dropdown-item" href="{{$workshop}}add-pdi">Add PDI</a>
                        <a class="dropdown-item" href="{{$workshop}}add-new-pack">Add New Pack</a>
                    </div>
                    <div>
                        <div class="dropdown-header">Reports</div>
                            @if (auth::user()->role == "admin")
                            <a class="dropdown-item" href="{{$reports}}build-schedule">Build Schedule</a>
                            <a class="dropdown-item" href="{{$reports}}incoming-builds">Incoming Builds</a>
                            <a class="dropdown-item" href="{{$reports}}build-inbound-view">Inbound Builds</a>
                            <a class="dropdown-item" href="{{$reports}}build-outbound-view">Outbound Builds</a>
                            <a class="dropdown-item" href="{{$reports}}wip-custom-colour-orders">WIP Custom Colour Orders</a>
                            <a class="dropdown-item" href="{{$reports}}pdi-view">View PDI's</a>
                            <a class="dropdown-item" href="{{$reports}}packing-view">View Pack's</a>
                            <a class="dropdown-item" href="{{$reports}}completed-bike-orders">Shipped Bikes</a>
                            <a class="dropdown-item" href="{{$reports}}mechanic-kpi">Mechanic KPI</a>
                            <a class="dropdown-item" href="{{$reports}}pdi-stats">PDI Stats</a>
                            <a class="dropdown-item" href="{{$reports}}bike-wip-stats">Bike WIP Stats</a>
                            <a class="dropdown-item" href="{{$reports}}qlik-data">Qlik Data</a>
                            @endif
                            <a class="dropdown-item" href="{{$reports}}stock-demand">Stock Demand</a>
                            <a class="dropdown-item" href="{{$reports}}essential-component-shortages">Essential Shortages</a>
                            <a class="dropdown-item" href="{{$reports}}expected-non-essential-shortages">Non Ess Shortages</a>
                            <a class="dropdown-item" href="{{$reports}}wip-fast-track-schedule">WIP Fast Track Orders</a>
                            <a class="dropdown-item" href="{{$reports}}frame-availability">Frame Availability</a>
                            <a class="dropdown-item" href="{{$reports}}wip-overdue-builds">WIP Overdue Builds</a>
                        </div>
                    </div>
                </div>
                @endif
            </li>
            @endauth
            @auth
            @if(Route::currentRouteName() != 'login' || Route::currentRouteName() != 'register')
            <li class="nav-item px-4">
                <a href="{{$help}}start" class="nav-link">Help</a>
            </li>
            @endif
            @endauth
        </ul>
    </div>
 </nav>
