<?php

Route::group(['prefix' => 'api', 'namespace' => 'App\\Modules\GetApi\Http\Controllers'], function()
{
	Route::get('/get/trips', 'ApiController@gettrips');
	Route::post('/addtrip', 'ApiController@posttrip');
	Route::get('/zzz', 'ApiController@posttrip');
});