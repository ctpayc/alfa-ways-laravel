<?php

Route::group(['prefix' => 'federation', 'namespace' => 'App\\Modules\Federation\Http\Controllers'], function()
{
	Route::get('/', 'FederationController@index');
});