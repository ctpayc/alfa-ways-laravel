<?php namespace Modules\Getapi\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;
use App\Trip;

class ApiController extends Controller {

	public function gettrips($id = '')
	{
		if ($id != '') {
			$result = Trip::find($id);
		} else {
			// $trips = DB::table('trips')->get();
			$trips = Trip::all()->take(10);
			foreach ($trips as $trip) {
				$result[] = $trip;
				// var_dump($user);
			}
		}
		$responseTest = response()->json($result)->header('Access-Control-Allow-Origin', '*');

		// var_dump($result);

		// return View::make('getapi::index', compact('api', 'responseTest'));
		return $responseTest;
	}

	public function posttrip(Request $request)
	{

		$newtrip = $request->all();

		$trip = new Trip;
		$trip->description = $newtrip['description'];
		$trip->user_id = $newtrip['user_id'];
		$trip->from_location_id = $newtrip['from'];
		$trip->to_location_id = $newtrip['to'];
		$trip->departure = '2015-06-23 03:59:51';
		$trip->arrival = '2015-06-23 03:59:51';

		$trip->save();

		$responseTest = response()->json(['from' => $newtrip['from']])->header('Access-Control-Allow-Origin', '*');

		// var_dump($result);

		// return View::make('getapi::index', compact('api', 'responseTest'));
		return $responseTest;
	}
	
}