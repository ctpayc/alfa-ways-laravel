<?php

Route::group(['middleware' => 'cors', 'prefix' => 'api/v1', 'namespace' => '\\Modules\GetApi\Http\Controllers'], function()
{
	Route::get('/get/trips/{id?}', 'ApiController@gettrips');
	Route::post('/addtrip', 'ApiController@posttrip');
	Route::get('/get/drivers/{id?}', 'ApiController@getdrivers');
	Route::get('/search-driver/{query?}', 'ApiController@searchdriver');
	//Route::get('/addtrip', 'ApiController@posttrip');
	// Route::get('/zzz', 'ApiController@posttrip');
});