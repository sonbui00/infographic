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



/*

*/

Route::controller('infographic', 'GraphicImageController');

Route::get('graphic/{id}', function ($id)
{
	return('hello');
});

/*
	
*/
Route::get('tags', function()
{
	return json_encode(Tag::lists('name'));
});


// Test

Route::get('test', function()
{
	if (($tag = Tag::where('name', '=', 'tag5')->first()) !== NULL) {
		return $tag->id;
	}
	return 'none';

});