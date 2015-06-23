<?php namespace App\Providers\Widgets;

use Widget;
use Illuminate\Support\ServiceProvider;

class GuestServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	// protected $defer = false;

	public function boot()
	{
		Widget::register('App\Widgets\Guest\Login', 'Login');
		Widget::register('App\Widgets\LeftSideBar\LeftSideBar', 'LeftSideBar');
		Widget::register('App\Widgets\Menu\LeftGuestMenu', 'LeftGuestMenu');
	}

	 public function register()
	{
		//
	}

}