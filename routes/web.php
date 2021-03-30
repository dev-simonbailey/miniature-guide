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

Route::get('/', 'WelcomeViewController@welcome')->name('welcome');

/* HELP */
Route::prefix('help')->group(function () {
    Route::get('start','HelpViewController@start')->name('help.start');
});

/* ADMIN */
Route::prefix('admin')->group(function () {
    Route::get('knowledge-base','AdminViewController@knowledge_base')->name('admin.knowledge_base');
    Route::get('ilog-add','AdminViewController@ilog_add')->name('admin.ilog_add');
});


/* SEARCH */
Route::prefix('search')->group(function () {
    Route::get('orders','SearchViewController@order')->name('search.order');
    Route::get('by-part','SearchViewController@by_part')->name('search.by_part');
    Route::get('customers','SearchViewController@customer')->name('search.customer');
    Route::get('stock-check','SearchViewController@stock_check')->name('search.stock_check');
});


/* DASHBOARD */
Route::prefix('dashboard')->group(function () {
    Route::get('bike-wip','DashboardViewController@bike_wip')->name('dashboard.bike_wip');
    Route::get('pac-wip','DashboardViewController@pac_wip')->name('dashboard.pac_wip');
    Route::get('pick-wip','DashboardViewController@pick_wip')->name('dashboard.pick_wip');
    Route::get('returns','DashboardViewController@returns')->name('dashboard.returns');
});


/* WORKSHOP */
Route::prefix('workshop')->group(function () {
    Route::get('add-inbound-build','WorkshopViewController@add_inbound_build')->name('workshop.add_inbound_build');
    Route::get('add-outbound-build','WorkshopViewController@add_outbound_build')->name('workshop.add_outbound_build');
    Route::get('add-pdi','WorkshopViewController@add_pdi')->name('workshop.add_pdi');
    Route::get('add-new-pack','WorkshopViewController@add_new_pack')->name('workshop.add_new_pack');
});


/* Reports */
Route::prefix('reports')->group(function () {
    Route::get('build-schedule','ReportsViewController@build_schedule')->name('reports.build_schedule');
    Route::get('incoming-builds','ReportsViewController@incoming_builds')->name('reports.incoming_builds');
    Route::get('wip-custom-colour-orders','ReportsViewController@wip_custom_colour_orders')->name('reports.wip_custom_colour_orders');
    Route::get('build-outbound-view','ReportsViewController@build_outbound_view')->name('reports.build_outbound_view');
    Route::get('build-inbound-view','ReportsViewController@build_inbound_view')->name('reports.build_inbound_view');
    Route::get('pdi-view','ReportsViewController@pdi_view')->name('reports.pdi_view');
    Route::get('packing-view','ReportsViewController@packing_view')->name('reports.packing_view');
    Route::get('completed-bike-orders','ReportsViewController@completed_bike_orders')->name('reports.completed_bike_orders');
    Route::get('stock-demand','ReportsViewController@stock_demand')->name('reports.stock_demand');
    Route::get('essential-component-shortages','ReportsViewController@essential_component_shortages')->name('reports.essential_component_shortages');
    Route::get('expected-non-essential-shortages','ReportsViewController@expected_non_essential_shortages')->name('reports.expected_non_essential_shortages');
    Route::get('wip-fast-track-schedule','ReportsViewController@wip_fast_track_schedule')->name('reports.wip_fast_track_schedule');
    Route::get('frame-availability','ReportsViewController@frame_availability')->name('reports.frame_availability');
    Route::get('wip-overdue-builds','ReportsViewController@wip_overdue_builds')->name('reports.wip_overdue_builds');
    Route::get('mechanic-kpi','ReportsViewController@mechanic_kpi')->name('reports.mechanic_kpi');
    Route::get('pdi-stats','ReportsViewController@pdi_stats')->name('reports.pdi_stats');
    Route::get('bike-wip-stats','ReportsViewController@bike_wip_stats')->name('reports.bike_wip_stats');
    Route::get('qlik-data','ReportsViewController@qlik_data')->name('reports.qlik_data');
});

Auth::routes();
//Route::get('/', 'WelcomeViewController@welcome')->name('welcome');
