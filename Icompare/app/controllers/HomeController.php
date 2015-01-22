<?php

class HomeController extends BaseController
{

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showPowerSupply()
	{
		Session::put('menuitem', 'powersupply');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showProcessorCooler()
	{
		Session::put('menuitem', 'processorcooler');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showInternalHarddrive()
	{
		Session::put('menuitem', 'internalharddrive');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showSoundcard()
	{
		Session::put('menuitem', 'soundcard');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showPCI()
	{
		Session::put('menuitem', 'PCI');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showVideoCard()
	{
		Session::put('menuitem', 'videocard');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showProcessor()
	{
		Session::put('menuitem', 'processor');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showInternalMemory()
	{
		Session::put('menuitem', 'internalmemory');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showMotherboard()
	{
		Session::put('menuitem', 'motherboard');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showCasing()
	{
		Session::put('menuitem', 'casing');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showSSD()
	{
		Session::put('menuitem', 'ssd');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}

	public function showBlurayDVD()
	{
		Session::put('menuitem', 'bluraydvd');
		if(Session::get('resultpage') == "no") {
			return View::make('index');
		}
		else {
			return View::make('result');
		}
	}
}
