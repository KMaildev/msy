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
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('passport', 'PassportController');
    Route::post('passport_import', 'PassportController@passport_import')->name('passport_import');
    Route::resource('owic', 'OwicController');
    Route::resource('reject', 'RejectController');
    Route::resource('new_demand', 'NewDemandController');
    Route::resource('old_demand', 'OldDemandController');

    Route::resource('overseas_agent', 'OverseasAgentController');
    Route::get('overseas_agent_ajax/{id}', array('as' => 'overseas_agent_ajax', 'uses' => 'OverseasAgentController@dependentAjax'));
    Route::get('overseas_agent_get_ajax/{id}', array('as' => 'overseas_agent_get_ajax', 'uses' => 'OverseasAgentController@findOverseaAgentAjax'));

    Route::resource('country', 'CountryController');
});
