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
	return View::make('home')->with('menu', 'home');
});

Route::get('/giving-options', function()
{
	return View::make('giving-options')->with('menu', 'giving-options');
});

Route::get('/donors', function()
{
	return View::make('donors')->with('menu', 'donors');
});