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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeViewController@welcome')->name('welcome');
Route::get('/register', 'WelcomeViewController@welcome')->name('welcome');
Route::get('/registration-success', 'RegistrationSuccessController@index');

/* HELP */
Route::prefix('help')->group(function () {
    Route::get('start', 'HelpViewController@start');
});

/* USERS */
Route::prefix('users')->group(function () {
    Route::get('/', ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@show'])->name('users.show');
    Route::get('/show', ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@show'])->name('users.show');
    Route::get('/add', ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@add'])->name('users.add');
    Route::post('/store',
        ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@store'])->name('users.store');
    Route::get('/edit/{id}',
        ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@edit'])->name('users.edit');
    Route::patch('/update/{user}',
        ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@update'])->name('users.update');
    Route::get('/delete/{id}', ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@deleteUser']);
    Route::get('/restore/{id}',
        ['middleware' => 'role:admin', 'uses' => 'RegisteredUsersController@restore'])->name('users.restoreUser');
});


/* ROLES */
Route::prefix('roles')->group(function () {
    Route::get('/', ['middleware' => 'role:admin', 'uses' => 'RolesController@index'])->name('roles.index');
    Route::get('/show', ['middleware' => 'role:admin', 'uses' => 'RolesController@index'])->name('roles.index');
    Route::get('/add', ['middleware' => 'role:admin', 'uses' => 'RolesController@add'])->name('roles.add');
    Route::post('/store', ['middleware' => 'role:admin', 'uses' => 'RolesController@store'])->name('roles.store');
    Route::get('/edit/{role}', ['middleware' => 'role:admin', 'uses' => 'RolesController@edit'])->name('roles.edit');
    Route::patch('/update/{role}',
        ['middleware' => 'role:admin', 'uses' => 'RolesController@update'])->name('roles.update');
    Route::get('/delete/{role}',
        ['middleware' => 'role:admin', 'uses' => 'RolesController@delete'])->name('roles.delete');
    Route::delete('/destroy/{role}',
        ['middleware' => 'role:admin', 'uses' => 'RolesController@destroy'])->name('roles.destroy');
});


/* KNOWLEDGEBASE */
Route::prefix('knowledgebase')->group(function () {
    Route::get('/index', 'KnowledgeBaseController@index')->name('knowledgebase.index');
});

/* LOGINTERACTIONS */
Route::prefix('loginteractions')->group(function () {
    Route::get('/index', 'LogInteractionsController@index')->name('loginteractions.index');
});


/* ORDERS */
Route::prefix('orders')->group(function () {
    Route::get('/', ['middleware' => 'role:admin', 'uses' => 'OrdersController@index'])->name('orders.index');
    Route::post('/details/',
        ['middleware' => 'role:admin', 'uses' => 'OrdersController@details'])->name('orders.details');
});


/* ORDERSBYPART */
Route::prefix('ordersbypart')->group(function () {
    Route::get('/index', 'OrdersByPartController@index')->name('ordersbypart.index');
});

/* CUSTOMERS */
Route::prefix('customers')->group(function () {
    Route::get('/index', 'CustomersController@index')->name('customers.index');
});

/* STOCKCHECK */
Route::prefix('stockcheck')->group(function () {
    Route::get('/index', 'StockCheckController@index')->name('stockcheck.index');
});

/* BIKEWIP */
Route::prefix('bikewip')->group(function () {
    Route::get('/index', 'BikeWipController@index')->name('bikewip.index');
});

/* PACWIP */
Route::prefix('pacwip')->group(function () {
    Route::get('/index', 'PacWipController@index')->name('pacwip.index');
});

/* PICKWIP */
Route::prefix('pickwip')->group(function () {
    Route::get('/index', 'PickWipController@index')->name('pickwip.index');
});

/* RETURNS */
Route::prefix('returns')->group(function () {
    Route::get('/index', 'ReturnsController@index')->name('returns.index');
});

/* ADDINBOUNDBUILD */
Route::prefix('addinboundbuild')->group(function () {
    Route::get('/index', 'AddInboundBuildController@index')->name('addinboundbuild.index');
});

/* ADDOUTBOUNDBUILD */
Route::prefix('addoutboundbuild')->group(function () {
    Route::get('/index', 'AddOutboundBuildController@index')->name('addoutboundbuild.index');
});

/* ADDPDI */
Route::prefix('addpdi')->group(function () {
    Route::get('/index', 'AddPdiController@index')->name('addpdi.index');
});

/* ADDNEWPACK */
Route::prefix('addnewpack')->group(function () {
    Route::get('/index', 'AddNewPackController@index')->name('addnewpack.index');
});


/* Reports */
Route::prefix('reports')->group(function () {
    Route::get('/build-schedule', 'ReportsController@build_schedule')->name('reports.build_schedule');
    Route::get('/incoming-builds', 'ReportsController@incoming_builds')->name('reports.incomingbuilds');
    Route::get('/wip-custom-colour-orders',
        'ReportsController@wip_custom_colour_orders')->name('reports.wipcustomcolourorders');
    Route::get('/build-outbound', 'ReportsController@build_outbound')->name('reports.buildoutbound');
    Route::get('/build-inbound', 'ReportsController@build_inbound')->name('reports.buildinbound');
    Route::get('/pdi', 'ReportsController@pdi')->name('reports.pdi');
    Route::get('/packing', 'ReportsController@packing')->name('reports.packing');
    Route::get('/shipped-bikes', 'ReportsController@shipped_bikes')->name('reports.shipped_bikes');
    Route::get('/stock-demand', 'ReportsController@stock_demand')->name('reports.stock_demand');
    Route::get('/essential-component-shortages',
        'ReportsController@essential_component_shortages')->name('reports.essential_component_shortages');
    Route::get('/expected-non-essential-shortages',
        'ReportsController@expected_non_essential_shortages')->name('reports.expected_non_essential_shortages');
    Route::get('/wip-fast-track-schedule',
        'ReportsController@wip_fast_track_schedule')->name('reports.wip_fast_track_schedule');
    Route::get('/frame-availability', 'ReportsController@frame_availability')->name('reports.frame_availability');
    Route::get('/wip-overdue-builds', 'ReportsController@wip_overdue_builds')->name('reports.wip_overdue_builds');
    Route::get('/mechanic-kpi', 'ReportsController@mechanic_kpi')->name('reports.mechanic_kpi');
    Route::get('/pdi-stats', 'ReportsController@pdi_stats')->name('reports.pdi_stats');
    Route::get('/bike-wip-stats', 'ReportsController@bike_wip_stats')->name('reports.bike_wip_stats');
    Route::get('/qlik-data', 'ReportsController@qlik_data')->name('reports.qlik_data');
});

Auth::routes();

