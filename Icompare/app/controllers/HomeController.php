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
		return View::make('index');
	}

	public function showProcessorCooler()
	{
		Session::put('menuitem', 'processorcooler');
		return View::make('index');
	}

	public function showInternalHarddrive()
	{
		Session::put('menuitem', 'internalharddrive');
		return View::make('index');
	}

	public function showSoundcard()
	{
		Session::put('menuitem', 'soundcard');
		return View::make('index');
	}

	public function showPCI()
	{
		Session::put('menuitem', 'PCI');
		return View::make('index');
	}

	public function showVideoCard()
	{
		Session::put('menuitem', 'videocard');
		return View::make('index');
	}

	public function showProcessor()
	{
		Session::put('menuitem', 'processor');
		return View::make('index');
	}

	public function showInternalMemory()
	{
		Session::put('menuitem', 'internalmemory');
		return View::make('index');
	}

	public function showMotherboard()
	{
		Session::put('menuitem', 'motherboard');
		return View::make('index');
	}

	public function showCasing()
	{
		Session::put('menuitem', 'casing');
		return View::make('index');
	}

	public function showSSD()
	{
		Session::put('menuitem', 'ssd');
		return View::make('index');
	}

	public function showBlurayDVD()
	{
		Session::put('menuitem', 'bluraydvd');
		return View::make('index');
	}
}
