<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication Routh Group
Route::group(['prefix' => 'auth'], function() {
	Route::get('/login', 'AuthenticationController@getLogin')->name('auth.login.get');
	Route::post('/login', 'AuthenticationController@login')->name('auth.login.post');
	Route::get('/register', 'RegistrationController@register')->name('auth.register.get');
	Route::post('/register', 'RegistrationController@store')->name('auth.register.post');

	Route::get('logout', 'AuthenticationController@logout');
});

// Dashboard Route Groups
// Route::group(['prefix' => 'dashboard'], function() {

	// User Route Group
    // Route::group(['prefix' => 'user'], function() {
    	Route::get('/', 'DashboardController@index')->name('dash.user.index');
    // });
// });

Route::post('shared/{id}', 'DashboardController@shared')->name('shared.post');


Route::group(['prefix' => 'admin'], function() {
  Route::get('/', 'DashboardController@admin')->name('dash.admin.index');

	Route::get('/reward/{id}', 'DashboardController@reward')->name('admin.reward');
	
	Route::group(['prefix' => 'links'], function() {
		Route::get('/', 'LinksController@index')->name('admin.links.index');
		Route::get('/create', 'LinksController@create')->name('admin.links.create');
		Route::post('/create', 'LinksController@store')->name('admin.links.store');
	});
});