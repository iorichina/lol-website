<?php

class HomeController extends BaseController {
	public $tpl_dir = 'home.';
	public $minitpl = true;
	public $layout  = 'layout.home.index';

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
		$this->layout 	= null;
		$this->tpl_dir 	= '';
		return $this->render('hello');
	}

	public function getIWantToFindAnPlayer() {
		return $this->layoutRender(__FUNCTION__);
	}
	public function getChampions() {
		return $this->layoutRender(__FUNCTION__);
	}
}
