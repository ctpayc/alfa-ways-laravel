<?php namespace App\Modules\Federation\Providers;

use Widget;
use App\Providers\Widgets\GuestServiceProvider;
use App\Providers\WidgetsServiceProvider;
use Illuminate\Support\ServiceProvider;

class FederationServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerConfig();
		$this->app->register(WidgetsServiceProvider::class);
		$this->app->register(GuestServiceProvider::class);
	}

	/**
	 * Register config.
	 * 
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
		    __DIR__.'/../Config/config.php' => config_path('federation.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'federation'
		);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
