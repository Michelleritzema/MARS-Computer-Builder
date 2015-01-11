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

Route::post('powersupply', 'SessionController@determineSection');

Route::get('/test', function()
{
	return View::make('php_to_java');
});

Route::get('/testboxes', function()
{
	return View::make('testboxes');
});
