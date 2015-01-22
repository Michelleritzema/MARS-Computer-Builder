<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/voeding', 'HomeController@showPowerSupply');
Route::get('/processorkoeler', 'HomeController@showProcessorCooler');
Route::get('/internehardeschijf', 'HomeController@showInternalHarddrive');
Route::get('/geluidskaart', 'HomeController@showSoundcard');
Route::get('/PCI', 'HomeController@showPCI');
Route::get('/videokaart', 'HomeController@showVideoCard');
Route::get('/processor', 'HomeController@showProcessor');
Route::get('/internalmemory', 'HomeController@showInternalMemory');
Route::get('/motherboard', 'HomeController@showMotherboard');
Route::get('/casing', 'HomeController@showCasing');
Route::get('/ssd', 'HomeController@showSSD');
Route::get('/blu-raydvd', 'HomeController@showBlurayDVD');

Route::get('/save', 'CheckController@checkToContinue');

Route::post('sessioncontroller', 'SessionController@determineSection');

Route::get('/test', function()
{
	return View::make('php_to_java');
});

Route::get('/testboxes', function()
{
	return View::make('testboxes');
});

Route::get('/awaiting_response', function()
{
	return View::make('awaiting_response');
});

Route::get('/dashboard_anny', function() { return View::make('dashboard_anny.home'); });
Route::get('/dashboard_anny_customer_data', function() { return View::make('dashboard_anny.customer_data'); });
Route::get('/dashboard_anny_product_data', function() { return View::make('dashboard_anny.product_data'); });
Route::get('/dashboard_michelle', function() { return View::make('dashboard_michelle.home'); });
Route::get('/dashboard_michelle_customer_data', function() { return View::make('dashboard_michelle.customer_data'); });
Route::get('/dashboard_michelle_product_data', function() { return View::make('dashboard_michelle.product_data'); });
Route::get('/dashboard_randa', function() { return View::make('dashboard_randa.home'); });
Route::get('/dashboard_randa_customer_data', function() { return View::make('dashboard_randa.customer_data'); });
Route::get('/dashboard_randa_product_data', function() { return View::make('dashboard_randa.product_data'); });
Route::get('/dashboard_sander', function() { return View::make('dashboard_sander.home'); });
Route::get('/dashboard_sander_customer_data', function() { return View::make('dashboard_sander.customer_data'); });
Route::get('/dashboard_sander_product_data', function() { return View::make('dashboard_sander.product_data'); });


Route::get('/annyenmichelle', function()
{ return View::make('result'); });