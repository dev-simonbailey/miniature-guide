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

use App\Http\Controllers\AddNewPackController;

Route::get('/', 'WelcomeViewController@welcome')->name('welcome');
Route::get('/register', 'WelcomeViewController@welcome')->name('welcome');
Route::get('/registration-success', 'RegistrationSuccessController@index');

/* HELP */
Route::prefix('help')->group(function () {
    Route::get('start','HelpViewController@start');
});

/* REGISTERED USERS */
Route::prefix('users')->group(function () {
    Route::get('/index', 'RegisteredUsersController@index')->name('users.show');
    Route::get('/show', 'RegisteredUsersController@index')->name('users.show');
    Route::get('/add', 'RegisteredUsersController@add')->name('users.add');
    Route::get('/edit/{user}', 'RegisteredUsersController@edit')->name('users.edit');
    Route::patch('/update/{user}', 'RegisteredUsersController@update')->name('users.update');
    Route::get('/delete/{user}', 'RegisteredUsersController@delete')->name('users.delete');
    Route::delete('/destroy/{user}', 'RegisteredUsersController@destroy')->name('users.destroy');
});

/* ROLES */
Route::prefix('roles')->group(function () {
    Route::get('/index', 'RolesController@index')->name('roles.show');
    Route::get('/show', 'RolesController@index')->name('roles.show');

    Route::get('/add', 'RolesController@add')->name('roles.add');
    Route::get('/store','LogInteractionsController@getstore')->name('errors.403');
    Route::post('/store', 'RolesController@store')->name('roles.store');

    Route::get('/edit/{role}', 'RolesController@edit')->name('roles.edit');
    Route::get('/update','KnowledgeBaseController@getupdate')->name('errors.403');
    Route::patch('/update/{role}', 'RolesController@update')->name('roles.update');

    Route::get('/delete/{role}', 'RolesController@delete')->name('roles.delete');
    Route::get('/destroy','RolesController@getdestroy')->name('errors.403');
    Route::delete('/destroy/{role}', 'RolesController@destroy')->name('roles.destroy');
});


/* KNOWLEDGEBASE */
Route::prefix('knowledgebase')->group(function () {
    Route::get('/index','KnowledgeBaseController@index')->name('knowledgebase.index');
    Route::get('/show','KnowledgeBaseController@show')->name('knowledgebase.show');

    Route::get('/create','KnowledgeBaseController@create')->name('knowledgebase.create');
    Route::get('/store','LogInteractionsController@getstore')->name('errors.403');
    Route::post('/store','KnowledgeBaseController@store')->name('knowledgebase.store');

    Route::get('/edit','KnowledgeBaseController@edit')->name('knowledgebase.edit');
    Route::get('/update','KnowledgeBaseController@getupdate')->name('errors.403');
    Route::patch('/update','KnowledgeBaseController@update')->name('knowledgebase.update');

    Route::get('/delete','KnowledgeBaseController@delete')->name('knowledgebase.delete');
    Route::get('/destroy','KnowledgeBaseController@getdestroy')->name('errors.403');
    Route::delete('/destroy','KnowledgeBaseController@destroy')->name('knowledgebase.destroy');
});

/* LOGINTERACTIONS */
Route::prefix('loginteractions')->group(function () {
    Route::get('/index','LogInteractionsController@index')->name('loginteractions.index');
    Route::get('/show','LogInteractionsController@show')->name('loginteractions.show');

    Route::get('/create','LogInteractionsController@create')->name('loginteractions.create');
    Route::get('/store','LogInteractionsController@getstore')->name('errors.403');
    Route::post('/store','LogInteractionsController@store')->name('loginteractions.store');

    Route::get('/edit','LogInteractionsController@edit')->name('loginteractions.edit');
    Route::get('/update','LogInteractionsController@getupdate')->name('errors.403');
    Route::patch('/update','LogInteractionsController@update')->name('loginteractions.update');

    Route::get('/delete','LogInteractionsController@delete')->name('loginteractions.delete');
    Route::get('/destroy','LogInteractionsController@getdestroy')->name('errors.403');
    Route::delete('/destroy','LogInteractionsController@destroy')->name('loginteractions.destroy');
});


/* ORDERS */
Route::prefix('orders')->group(function () {
    Route::get('/index','OrdersController@index')->name('orders.index');
    Route::get('/show','OrdersController@show')->name('orders.show');

    Route::get('/create','OrdersController@create')->name('orders.create');
    Route::get('/store','OrdersController@getstore')->name('errors.403');
    Route::post('/store','OrdersController@store')->name('orders.store');

    Route::get('/edit','OrdersController@edit')->name('orders.edit');
    Route::get('/update','OrdersController@getupdate')->name('errors.403');
    Route::patch('/update','OrdersController@update')->name('orders.update');

    Route::get('/delete','OrdersController@delete')->name('orders.delete');
    Route::get('/destroy','OrdersController@getdestroy')->name('errors.403');
    Route::delete('/destroy','OrdersController@destroy')->name('orders.destroy');
});


/* ORDERSBYPART */
Route::prefix('ordersbypart')->group(function () {
    Route::get('/index','OrdersByPartController@index')->name('ordersbypart.index');
    Route::get('/show','OrdersByPartController@show')->name('ordersbypart.show');

    Route::get('/create','OrdersByPartController@create')->name('ordersbypart.create');
    Route::get('/store','CustomersController@getstore')->name('errors.403');
    Route::post('/store','OrdersByPartController@store')->name('ordersbypart.store');

    Route::get('/edit','OrdersByPartController@edit')->name('ordersbypart.edit');
    Route::get('/update','CustomersController@getupdate')->name('errors.403');
    Route::patch('/update','OrdersByPartController@update')->name('ordersbypart.update');

    Route::get('/delete','OrdersByPartController@delete')->name('ordersbypart.delete');
    Route::get('/destroy','OrdersByPartController@getdestroy')->name('errors.403');
    Route::delete('/destroy','OrdersByPartController@destroy')->name('ordersbypart.destroy');
});

/* CUSTOMERS */
Route::prefix('customers')->group(function () {
    Route::get('/index','CustomersController@index')->name('customers.index');
    Route::get('/show','CustomersController@show')->name('customers.show');

    Route::get('/create','CustomersController@create')->name('customers.create');
    Route::get('/store','CustomersController@getstore')->name('errors.403');
    Route::post('/store','CustomersController@store')->name('customers.store');

    Route::get('/edit','CustomersController@edit')->name('customers.edit');
    Route::get('/update','CustomersController@getupdate')->name('errors.403');
    Route::patch('/update','CustomersController@update')->name('customers.update');

    Route::get('/delete','CustomersController@delete')->name('customers.delete');
    Route::get('/destroy','CustomersController@getdestroy')->name('errors.403');
    Route::delete('/destroy','CustomersController@destroy')->name('customers.destroy');
});

/* STOCKCHECK */
Route::prefix('stockcheck')->group(function () {
    Route::get('/index','StockCheckController@index')->name('stockcheck.index');
    Route::get('/show','StockCheckController@show')->name('stockcheck.show');

    Route::get('/create','StockCheckController@create')->name('stockcheck.create');
    Route::get('/store','StockCheckController@getstore')->name('errors.403');
    Route::post('/store','StockCheckController@store')->name('stockcheck.store');

    Route::get('/edit','StockCheckController@edit')->name('stockcheck.edit');
    Route::get('/update','StockCheckController@getupdate')->name('errors.403');
    Route::patch('/update','StockCheckController@update')->name('stockcheck.update');

    Route::get('/delete','StockCheckController@delete')->name('stockcheck.delete');
    Route::get('/destroy','StockCheckController@getdestroy')->name('errors.403');
    Route::delete('/destroy','StockCheckController@destroy')->name('stockcheck.destroy');
});

/* BIKEWIP */
Route::prefix('bikewip')->group(function () {
    Route::get('/index','BikeWipController@index')->name('bikewip.index');
    Route::get('/show','BikeWipController@show')->name('bikewip.show');

    Route::get('/create','BikeWipController@create')->name('bikewip.create');
    Route::get('/store','BikeWipController@getstore')->name('errors.403');
    Route::post('/store','BikeWipController@store')->name('bikewip.store');

    Route::get('/edit','BikeWipController@edit')->name('bikewip.edit');
    Route::get('/update','BikeWipController@getupdate')->name('errors.403');
    Route::patch('/update','BikeWipController@update')->name('bikewip.update');

    Route::get('/delete','BikeWipController@delete')->name('bikewip.delete');
    Route::get('/destroy','BikeWipController@getdestroy')->name('errors.403');
    Route::delete('/destroy','BikeWipController@destroy')->name('bikewip.destroy');
});

/* PACWIP */
Route::prefix('pacwip')->group(function () {
    Route::get('/index','PacWipController@index')->name('pacwip.index');
    Route::get('/show','PacWipController@show')->name('pacwip.show');

    Route::get('/create','PacWipController@create')->name('pacwip.create');
    Route::get('/store','PacWipController@getstore')->name('errors.403');
    Route::post('/store','PacWipController@store')->name('pacwip.store');

    Route::get('/edit','PacWipController@edit')->name('pacwip.edit');
    Route::get('/update','PacWipController@getupdate')->name('errors.403');
    Route::patch('/update','PacWipController@update')->name('pacwip.update');

    Route::get('/delete','PacWipController@delete')->name('pacwip.delete');
    Route::get('/destroy','PacWipController@getdestroy')->name('errors.403');
    Route::delete('/destroy','PacWipController@destroy')->name('pacwip.destroy');
});

/* PICKWIP */
Route::prefix('pickwip')->group(function () {
    Route::get('/index','PickWipController@index')->name('pickwip.index');
    Route::get('/show','PickWipController@show')->name('pickwip.show');

    Route::get('/create','PickWipController@create')->name('pickwip.create');
    Route::get('/store','PickWipController@getstore')->name('errors.403');
    Route::post('/store','PickWipController@store')->name('pickwip.store');

    Route::get('/edit','PickWipController@edit')->name('pickwip.edit');
    Route::get('/update','PickWipController@getupdate')->name('errors.403');
    Route::patch('/update','PickWipController@update')->name('pickwip.update');

    Route::get('/delete','PickWipController@delete')->name('pickwip.delete');
    Route::get('/destroy','PickWipController@getdestroy')->name('errors.403');
    Route::delete('/destroy','PickWipController@destroy')->name('pickwip.destroy');
});

/* RETURNS */
Route::prefix('returns')->group(function () {
    Route::get('/index','ReturnsController@index')->name('returns.index');
    Route::get('/show','ReturnsController@show')->name('returns.show');

    Route::get('/create','ReturnsController@create')->name('returns.create');
    Route::get('/store','ReturnsController@getstore')->name('errors.403');
    Route::post('/store','ReturnsController@store')->name('returns.store');

    Route::get('/edit','ReturnsController@edit')->name('returns.edit');
    Route::get('/update','ReturnsController@getupdate')->name('errors.403');
    Route::patch('/update','ReturnsController@update')->name('returns.update');

    Route::get('/delete','ReturnsController@delete')->name('returns.delete');
    Route::get('/destroy','ReturnsController@getdestroy')->name('errors.403');
    Route::delete('/destroy','ReturnsController@destroy')->name('returns.destroy');
});

/* ADDINBOUNDBUILD */
Route::prefix('addinboundbuild')->group(function () {
    Route::get('/index','AddInboundBuildController@index')->name('addinboundbuild.index');
    Route::get('/show','AddInboundBuildController@show')->name('addinboundbuild.show');

    Route::get('/create','AddInboundBuildController@create')->name('addinboundbuild.create');
    Route::get('/store','AddInboundBuildController@getstore')->name('errors.403');
    Route::post('/store','AddInboundBuildController@store')->name('addinboundbuild.store');

    Route::get('/edit','AddInboundBuildController@edit')->name('addinboundbuild.edit');
    Route::get('/update','AddInboundBuildController@getupdate')->name('errors.403');
    Route::patch('/update','AddInboundBuildController@update')->name('addinboundbuild.update');

    Route::get('/delete','AddInboundBuildController@delete')->name('addinboundbuild.delete');
    Route::get('/destroy','AddInboundBuildController@getdestroy')->name('errors.403');
    Route::delete('/destroy','AddInboundBuildController@destroy')->name('addinboundbuild.destroy');
});

/* ADDOUTBOUNDBUILD */
Route::prefix('addoutboundbuild')->group(function () {
    Route::get('/index','AddOutboundBuildController@index')->name('addoutboundbuild.index');
    Route::get('/show','AddOutboundBuildController@show')->name('addoutboundbuild.show');

    Route::get('/create','AddOutboundBuildController@create')->name('addoutboundbuild.create');
    Route::get('/store','AddOutboundBuildController@getstore')->name('errors.403');
    Route::post('/store','AddOutboundBuildController@store')->name('addoutboundbuild.store');

    Route::get('/edit','AddOutboundBuildController@edit')->name('addoutboundbuild.edit');
    Route::get('/update','AddOutboundBuildController@getupdate')->name('errors.403');
    Route::patch('/update','AddOutboundBuildController@update')->name('addoutboundbuild.update');

    Route::get('/delete','AddOutboundBuildController@delete')->name('addoutboundbuild.delete');
    Route::get('/destroy','AddOutboundBuildController@getdestroy')->name('errors.403');
    Route::delete('/destroy','AddOutboundBuildController@destroy')->name('addoutboundbuild.destroy');
});

/* ADDPDI */
Route::prefix('addpdi')->group(function () {
    Route::get('/index','AddPdiController@index')->name('addpdi.index');
    Route::get('/show','AddPdiController@show')->name('addpdi.show');

    Route::get('/create','AddPdiController@create')->name('addpdi.create');
    Route::get('/store','AddPdiController@getstore')->name('errors.403');
    Route::post('/store','AddPdiController@store')->name('addpdi.store');

    Route::get('/edit','AddPdiController@edit')->name('addpdi.edit');
    Route::get('/update','AddPdiController@getupdate')->name('errors.403');
    Route::patch('/update','AddPdiController@update')->name('addpdi.update');

    Route::get('/delete','AddPdiController@delete')->name('addpdi.delete');
    Route::get('/destroy','AddPdiController@getdestroy')->name('errors.403');
    Route::delete('/destroy','AddPdiController@destroy')->name('addpdi.destroy');
});

/* ADDNEWPACK */
Route::prefix('addnewpack')->group(function () {
    Route::get('/index','AddNewPackController@index')->name('addnewpack.index');
    Route::get('/show','AddNewPackController@show')->name('addnewpack.show');

    Route::get('/create','AddNewPackController@create')->name('addnewpack.create');
    Route::get('/store','AddNewPackController@getstore')->name('errors.403');
    Route::post('/store','AddNewPackController@store')->name('addnewpack.store');

    Route::get('/edit','AddNewPackController@edit')->name('addnewpack.edit');
    Route::get('/update','AddNewPackController@getupdate')->name('errors.403');
    Route::patch('/update','AddNewPackController@update')->name('addnewpack.update');

    Route::get('/delete','AddNewPackController@delete')->name('addnewpack.delete');
    Route::get('/destroy','AddNewPackController@getdestroy')->name('errors.403');
    Route::delete('/destroy','AddNewPackController@destroy')->name('addnewpack.destroy');
});


/* Reports */
Route::prefix('reports')->group(function () {
    Route::get('/build-schedule','ReportsController@build_schedule')->name('reports.build_schedule');
    Route::get('/incoming-builds','ReportsController@incoming_builds')->name('reports.incomingbuilds');
    Route::get('/wip-custom-colour-orders','ReportsController@wip_custom_colour_orders')->name('reports.wipcustomcolourorders');
    Route::get('/build-outbound','ReportsController@build_outbound')->name('reports.buildoutbound');
    Route::get('/build-inbound','ReportsController@build_inbound')->name('reports.buildinbound');
    Route::get('/pdi','ReportsController@pdi')->name('reports.pdi');
    Route::get('/packing','ReportsController@packing')->name('reports.packing');
    Route::get('/shipped-bikes','ReportsController@shipped_bikes')->name('reports.shipped_bikes');
    Route::get('/stock-demand','ReportsController@stock_demand')->name('reports.stock_demand');
    Route::get('/essential-component-shortages','ReportsController@essential_component_shortages')->name('reports.essential_component_shortages');
    Route::get('/expected-non-essential-shortages','ReportsController@expected_non_essential_shortages')->name('reports.expected_non_essential_shortages');
    Route::get('/wip-fast-track-schedule','ReportsController@wip_fast_track_schedule')->name('reports.wip_fast_track_schedule');
    Route::get('/frame-availability','ReportsController@frame_availability')->name('reports.frame_availability');
    Route::get('/wip-overdue-builds','ReportsController@wip_overdue_builds')->name('reports.wip_overdue_builds');
    Route::get('/mechanic-kpi','ReportsController@mechanic_kpi')->name('reports.mechanic_kpi');
    Route::get('/pdi-stats','ReportsController@pdi_stats')->name('reports.pdi_stats');
    Route::get('/bike-wip-stats','ReportsController@bike_wip_stats')->name('reports.bike_wip_stats');
    Route::get('/qlik-data','ReportsController@qlik_data')->name('reports.qlik_data');
});

Auth::routes();

