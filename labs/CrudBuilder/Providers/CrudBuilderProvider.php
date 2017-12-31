<?php

namespace CrudBuilder\Providers;

use Illuminate\Support\ServiceProvider;

class CrudBuilderProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../Http/routes.php';
        $this->app->make('CodeBuilder\Http\Controllers\CrudBuilder');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
