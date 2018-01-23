<?php

namespace Submtd\CashaddrConverter\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The CashaddrConverterServiceProvider class is the main
 * entry point for the package.
 */
class CashaddrConverterServiceProvider extends ServiceProvider
{
    /**
     * The service provider register method
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cashaddr-converter', 'Submtd\CashaddrConverter\CashaddrConverter');
    }

    /**
     * The service provider boot method
     *
     * @return void
     */
    public function boot()
    {
    }
}
