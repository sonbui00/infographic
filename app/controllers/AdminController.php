<?php

class AdminController extends BaseController {

	protected $layout = 'admin.main';

	public function __construct()
	{
		$this->beforeFilter('authAdmin', array('except' => array('getLogin', 'postLogin')));
	}

	public function getLogin()
	{
		if (Auth::check()) {
			Auth::logout();
		}
		return View::make('admin.login')->withTitle('Admin login page');
	}

	public function postLogin()
	{
		$validator = Validator::make(
				Input::all(),
				array(
					'username' => 'required',
					'password' => 'required|alpha|min:2'
				)
		);

		if ($validator->passes()) 
		{
			if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
				return Redirect::action('AdminController@getDataboard');
			} else {
				return Redirect::action('AdminController@getLogin')
					->withMessage('Your username/password combination was incorrect')
					->withInput();
			}
		} 
		else 
		{
			return Redirect::action('AdminController@getLogin');
		}
	}

	public function getDataboard() {
		$this->layout->withTitle('Admin');
		$this->layout->withPageHeader('Databoard');
		$this->layout->content = "Hello";
	}

	public function getInfographicManager()
	{
		$infographics = GraphicImages::all();
		return View::make('admin.sub.infographic-manager')->withTitle('Infographic Manager')->withInfographics($infographics);
	}

	public function getNewInfographic()
	{
		return View::make('admin.sub.infographic-new')->withTitle('Add new Infographic');
	}

	public function postNewInfographic()
	{
		return GraphicImageController::store(URL::action('AdminController@getNewInfographic')); 
	}

	public function getEditInfographic($id)
	{
		return GraphicImageController::edit($id);
	}

	public function postUpdateInfographic($id)
	{
		return GraphicImageController::update($id);
	}

	public function getDeleteInfographic($id) {
		return GraphicImageController::destroy($id);
	}

	
}