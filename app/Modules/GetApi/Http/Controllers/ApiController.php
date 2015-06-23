<?php namespace App\Modules\Getapi\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use DB;
use App\Trip;

class ApiController extends Controller {

	public function gettrips()
	{
		$trips = DB::table('trips')->get();
		foreach ($trips as $trip) {
			$result[] = $trip;
			// var_dump($user);
		}
		$responseTest = response()->json($result)->header('Access-Control-Allow-Origin', '*');

		// var_dump($result);

		// return View::make('getapi::index', compact('api', 'responseTest'));
		return $responseTest;
	}
	public function posttrip()
	{
		// $trip = new Trip;
		// $trip->description = 'react post ajax'; //Request::get('description');
		// $trip->user_id = 100; //Request::get('user_id');
		// $trip->from_location_id = 555; //Request::get('from');
		// $trip->to_location_id = 777; //Request::get('to');

		// $trip->save();

		// $responseTest = response()->json($trip)->header('Access-Control-Allow-Origin', '*');

		// var_dump($result);

		// return View::make('getapi::index', compact('api', 'responseTest'));
		return '$responseTest';
	}
	
}