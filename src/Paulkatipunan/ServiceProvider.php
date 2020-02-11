<?php

namespace PaulKatipunan;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * 
 */
class ServiceProvider extends BaseServiceProvider
{
	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include 'routes/web.php';

        $this->publishes([
           __DIR__.'/views/admin/dashboard.blade.php' => resource_path('/views/admin/dashboard.blade.php'),
        ]);

        $this->publishes([
           __DIR__.'/views/admin/layouts' => resource_path('/views/admin/layouts'),
        ]);

        $this->publishes([
           __DIR__.'/public/css/dashboard.css' => public_path('/css/dashboard.css'),
        ]);
    }
}