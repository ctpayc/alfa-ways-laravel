<?php

Route::group(['middleware' => 'cors', 'prefix' => 'api/v1', 'namespace' => 'Modules\Auth\Http\Controllers'], function()
{
	Route::resource('authenticate', 'AuthController', ['only' => ['index']]);
	Route::post('login', 'AuthController@authenticate');
	// Route::post('signup', 'AuthController@getAuthenticatedUser');
	Route::post('signup', 'AuthController@registration');
	Route::get('getuser', 'AuthController@getAuthenticatedUser');
});