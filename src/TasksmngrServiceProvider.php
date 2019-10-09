<?php

namespace OpenITWorks\Tasksmngr;

use illuminate\support\ServiceProvider;

/**
 * 
 */
class TasksmngrServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
	    $this->loadViewsFrom(__DIR__.'/views', 'tasks');
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{
	    
	}

}