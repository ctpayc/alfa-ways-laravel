<?php namespace App\Providers;

use Widget;
use Illuminate\Support\ServiceProvider;

class WidgetsServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	// protected $defer = false;

	public function boot()
	{
		Widget::register('App\Widgets\federationShedule', 'Shedule');
		Widget::register('App\Widgets\RefereeShedule', 'RefereeShedule');
	}

	 public function register()
	{
		//
	}

}