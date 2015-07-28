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
	return View::make('login')->with('no_bootstrap', true);
});

Route::get('/images_v1', function()
{
	return View::make('images_v1')->with('no_bootstrap', true);
});

Route::get('/{link}', function($link)
{
	return View::make($link)->with('menu', $link);
});