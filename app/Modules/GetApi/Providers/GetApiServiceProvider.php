<?php namespace App\Modules\Getapi\Providers;

use Illuminate\Support\ServiceProvider;

class GetApiServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		\Lang::addNamespace('getapi', __DIR__.'/../Resources/lang');
		\View::addNamespace('getapi', __DIR__.'/../Resources/views');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{		
		$this->registerConfig();
	}

	/**
	 * Register config.
	 * 
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
		    __DIR__.'/../Config/config.php' => config_path('getapi.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'getapi'
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
