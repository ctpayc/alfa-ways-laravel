<?php namespace Modules\Getapi\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use DB;
use App\Trip;
use Carbon\Carbon;

class ApiController extends Controller {

	public function gettrips($id = '')
	{
		if ($id != '') {
			$result = Trip::find($id);
		} else {
			$trips = DB::table('trips')->orderBy('created_at', 'desc')->take(10)->get();
			// $trips = Trip::all()->orderBy('user_id')->get();
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

		$departure = new Carbon($newtrip['departure']);

		$trip = new Trip;
		$trip->description = $newtrip['description'];
		$trip->user_id = $newtrip['user_id'];
		$trip->from_location_id = $newtrip['from'];
		$trip->to_location_id = $newtrip['to'];
		$trip->departure = $departure;
		$trip->arrival = '2015-06-23 03:59:51';

		if($trip->save()) {
			$result = ["result" => "New trip added successfully!", "error" => $newtrip];
			$response = response()->json($result)->header("Access-Control-Allow-Origin", "*");
		} else {
			$result = ["result" => "Can't add new trip!", "error" => "Can't add new trip!"];
			$response = response()->json($result, 440)->header("Access-Control-Allow-Origin", "*");
		}

		return $response;
	}
	
}