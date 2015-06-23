<?php namespace App\Modules\Federation\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class FederationController extends Controller {

	public function index()
	{
		return View::make('federation::index');
	}
	
}