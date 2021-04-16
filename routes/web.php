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

Route::get('/', 'WelcomeViewController@welcome');

Route::get('/registration-success', 'RegistrationSuccessController@index');

/* HELP */
Route::prefix('help')->group(function () {
    Route::get('start','HelpViewController@start');
});

/* ADMIN */
Route::prefix('admin')->group(function () {
    Route::get('knowledge-base','AdminViewController@knowledge_base');
    Route::get('ilog-add','AdminViewController@ilog_add');
});

/* Registered Users */
Route::prefix('users')->group(function () {
    Route::get('/show', 'RegisteredUsersController@index')->name('users.show');
    Route::get('/edit/{user}', 'RegisteredUsersController@edit')->name('users.edit');
    Route::get('/delete/{user}', 'RegisteredUsersController@delete')->name('users.delete');
    Route::patch('/update/{user}', 'RegisteredUsersController@update')->name('users.update');
    Route::delete('/destroy/{user}', 'RegisteredUsersController@destroy')->name('users.destroy');
});

/* Roles */
Route::prefix('roles')->group(function () {
    Route::get('/show', 'RolesController@index')->name('roles.show');
    Route::get('/add', 'RolesController@add')->name('roles.add');
    Route::post('/store', 'RolesController@store')->name('roles.store');
    Route::get('/edit/{role}', 'RolesController@edit')->name('roles.edit');
    Route::get('/delete/{role}', 'RolesController@delete')->name('roles.delete');
    Route::patch('/update/{role}', 'RolesController@update')->name('roles.update');
    Route::delete('/destroy/{role}', 'RolesController@destroy')->name('roles.destroy');
});


/* SEARCH */
Route::prefix('search')->group(function () {
    Route::get('orders','SearchViewController@order');
    Route::post('orders','SearchViewController@uniqueorder');
    Route::get('by-part','SearchViewController@by_part');
    Route::get('customers','SearchViewController@customer');
    Route::get('stock-check','SearchViewController@stock_check');
});


/* DASHBOARD */
Route::prefix('dashboard')->group(function () {
    Route::get('bike-wip','DashboardViewController@bike_wip');
    Route::get('pac-wip','DashboardViewController@pac_wip');
    Route::get('pick-wip','DashboardViewController@pick_wip');
    Route::get('returns','DashboardViewController@returns');
});


/* WORKSHOP */
Route::prefix('workshop')->group(function () {
    Route::get('add-inbound-build','WorkshopViewController@add_inbound_build');
    Route::get('add-outbound-build','WorkshopViewController@add_outbound_build');
    Route::get('add-pdi','WorkshopViewController@add_pdi');
    Route::get('add-new-pack','WorkshopViewController@add_new_pack');
});


/* Reports */
Route::prefix('reports')->group(function () {
    Route::get('build-schedule','ReportsViewController@build_schedule');
    Route::get('incoming-builds','ReportsViewController@incoming_builds');
    Route::get('wip-custom-colour-orders','ReportsViewController@wip_custom_colour_orders');
    Route::get('build-outbound-view','ReportsViewController@build_outbound_view');
    Route::get('build-inbound-view','ReportsViewController@build_inbound_view');
    Route::get('pdi-view','ReportsViewController@pdi_view');
    Route::get('packing-view','ReportsViewController@packing_view');
    Route::get('completed-bike-orders','ReportsViewController@completed_bike_orders');
    Route::get('stock-demand','ReportsViewController@stock_demand');
    Route::get('essential-component-shortages','ReportsViewController@essential_component_shortages');
    Route::get('expected-non-essential-shortages','ReportsViewController@expected_non_essential_shortages');
    Route::get('wip-fast-track-schedule','ReportsViewController@wip_fast_track_schedule');
    Route::get('frame-availability','ReportsViewController@frame_availability');
    Route::get('wip-overdue-builds','ReportsViewController@wip_overdue_builds');
    Route::get('mechanic-kpi','ReportsViewController@mechanic_kpi');
    Route::get('pdi-stats','ReportsViewController@pdi_stats');
    Route::get('bike-wip-stats','ReportsViewController@bike_wip_stats');
    Route::get('qlik-data','ReportsViewController@qlik_data');
});

Auth::routes();

