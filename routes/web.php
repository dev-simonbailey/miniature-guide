<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ADMIN */
Route::get('/admin/knowledge-base', function() {
    return view('/admin/knowledge_base');
});
Route::get('/admin/ilog-add', function() {
    return view('/admin/ilog_add');
});

/* SEARCH */
Route::get('/search/orders', function() {
    return view('/search/order');
});
Route::get('/search/by-part', function() {
    return view('/search/by_part');
});
Route::get('/search/customers', function() {
    return view('/search/customer');
});
Route::get('/search/stock-check', function() {
    return view('/search/stock_check');
});

/* DASHBOARD */
Route::get('/dashboard/bike-wip', function() {
    return view('/dashboard/bike_wip');
});
Route::get('/dashboard/pac-wip', function() {
    return view('/dashboard/pac_wip');
});
Route::get('/dashboard/pick-wip', function() {
    return view('/dashboard/pick_wip');
});
Route::get('/dashboard/returns', function() {
    return view('/dashboard/returns');
});

/* WORKSHOP */
Route::get('/workshop/add-inbound-build', function() {
    return view('/workshop/add_inbound_build');
});
Route::get('/workshop/add-outbound-build', function() {
    return view('/workshop/add_outbound_build');
});
Route::get('/workshop/add-pdi', function() {
    return view('/workshop/add_pdi');
});
Route::get('/workshop/add-new-pack', function() {
    return view('/workshop/add_new_pack');
});

/* Reports */
Route::get('/reports/ssrs-build-schedule', function() {
    return view('/reports/build_schedule');
});
Route::get('/reports/ssrs-incoming-builds', function() {
    return view('/reports/incoming_builds');
});
Route::get('/reports/ssrs-wip-custom-colour-orders', function() {
    return view('/reports/wip_custom_colour_orders');
});
Route::get('/reports/ssrs-build-outbound-view', function() {
    return view('/reports/build_outbound_view');
});
Route::get('/reports/ssrs-build-inbound-view', function() {
    return view('/reports/build_inbound_view');
});
Route::get('/reports/ssrs-pdi-view', function() {
    return view('/reports/pdi_view');
});
Route::get('/reports/packing-view', function() {
    return view('/reports/packing_view');
});
Route::get('/reports/ssrs-completed-bike-orders', function() {
    return view('/reports/completed_bike_orders');
});
Route::get('/reports/ssrs-stock-demand', function() {
    return view('/reports/stock_demand');
});
Route::get('/reports/ssrs-essential-component-shortages', function() {
    return view('/reports/essential_component_shortages');
});
Route::get('/reports/ssrs-expected-non-essential-shortages', function() {
    return view('/reports/expected_non_essential_shortages');
});
Route::get('/reports/ssrs-wip-fast-track-schedule', function() {
    return view('/reports/wip_fast_track_schedule');
});
Route::get('/reports/ssrs-frame-availability', function() {
    return view('/reports/frame_availability');
});
Route::get('/reports/ssrs-wip-overdue-builds', function() {
    return view('/reports/wip_overdue_builds');
});
Route::get('/reports/mechanic-kpi', function() {
    return view('/reports/mechanic_kpi');
});
Route::get('/reports/ssrs-pdi-stats', function() {
    return view('/reports/pdi_stats');
});
Route::get('/reports/ssrs-bike-wip-stats', function() {
    return view('/reports/bike_wip_stats');
});
Route::get('/reports/ssrs-qlik-data', function() {
    return view('/reports/qlik_data');
});