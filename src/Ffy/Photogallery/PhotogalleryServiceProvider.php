<?php namespace Ffy\Photogallery;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PhotogalleryServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ffy/photogallery');

        //View::addNamespace('photogallery', app_path().'/views/photos');
        View::addNamespace('photogallery', __DIR__.'/../../views');
        //Config::get('package::database.connections')


        include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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