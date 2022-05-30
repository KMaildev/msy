<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::middleware('auth')->group(function () {
    Route::get('/home', 'PassportController@index')->name('home');

    Route::resource('passport', 'PassportController');
    Route::post('passport_import', 'PassportController@passport_import')->name('passport_import');
    Route::get('passport_export', 'PassportController@passport_export')->name('passport_export');
    Route::resource('owic', 'OwicController');
    Route::resource('reject', 'RejectController');
    Route::get('reject_passport_export', 'RejectController@reject_passport_export')->name('reject_passport_export');

    Route::resource('new_demand', 'NewDemandController');
    Route::resource('old_demand', 'OldDemandController');
    Route::get('new_demand_export', 'NewDemandController@new_demand_export')->name('new_demand_export');

    Route::resource('contract', 'ContractController');
    Route::get('create_contract/{id}', array('as' => 'create_contract', 'uses' => 'ContractController@create'));

    Route::resource('sending', 'SendingController');
    Route::get('create_sending/{id}', array('as' => 'create_sending', 'uses' => 'SendingController@create'));

    Route::resource('overseas_agent', 'OverseasAgentController');
    Route::get('overseas_agent_ajax/{id}', array('as' => 'overseas_agent_ajax', 'uses' => 'OverseasAgentController@dependentAjax'));
    Route::get('overseas_agent_get_ajax/{id}', array('as' => 'overseas_agent_get_ajax', 'uses' => 'OverseasAgentController@findOverseaAgentAjax'));

    Route::resource('country', 'CountryController');

    Route::resource('labour_management', 'LabourManagementController');
    Route::get('add_labour/{id}', array('as' => 'add_labour', 'uses' => 'LabourManagementController@create'));
    Route::get('view_contract_labour/{id}', array('as' => 'view_contract_labour', 'uses' => 'LabourManagementController@view_contract_labour'));
    Route::get('store_labour', array('as' => 'store_labour', 'uses' => 'LabourManagementController@store_labour'));
    Route::get('delete_labour/{id}', array('as' => 'delete_labour', 'uses' => 'LabourManagementController@delete_labour'));

    Route::view('/file_manager', 'file_manager.index')->name('file_manager.index');
});
