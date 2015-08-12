<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		// $mytime = Carbon\Carbon::now();
		// echo $mytime->toDateTimeString();

		$x = 'Thu Aug 13 2015';
		$y = '02:00:00 GMT+0700 (KRAT)';
		$departure = new Carbon($x.$y);
		echo $departure;

		$data = [
			'content' => 'date'
		];

		return view('welcome', $data);
	}

}
