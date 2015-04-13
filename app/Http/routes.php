<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');*/

//my first laravel page :-)
/*Route::get('my_test', 'Page_Controller@index');

Route::get('about', 'Page_Controller@about');

Route::get('contact', 'Page_Controller@contact');

Route::get('articles', 'ArticlesController@index');

Route::get('articles/create', 'ArticlesController@create');

Route::get('articles/{id}', 'ArticlesController@show');

Route::post('article', 'ArticlesController@store');*/

Route::resource('articles','ArticlesController');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
