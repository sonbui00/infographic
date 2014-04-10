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

Route::get('/', array('as' => 'homepage', function()
{
	$graphics = GraphicImages::all();
	return View::make('homepage', array('title' => "Home", 'graphics' => $graphics));
}));

Route::controller('infographic', 'Infographic');

Route::get('graphic/{id}', function ($id)
{
	return('hello');
});