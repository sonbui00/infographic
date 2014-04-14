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
/*
	Homepage
*/
Route::get('/', array('as' => 'homepage', 'uses' => 'GraphicImageController@index'));

/*
	Admin page
*/


Route::controller('admin', 'AdminController');

Route::get('admin', array('as' => 'admin', 'uses' => 'AdminController@getDataboard'));

Route::filter('authAdmin', function()
{
	if (Auth::guest()) return Redirect::action('AdminController@getLogin');

});

/*

*/

Route::controller('infographic', 'GraphicImageController');

Route::get('graphic/{id}', function ($id)
{
	return('hello');
});