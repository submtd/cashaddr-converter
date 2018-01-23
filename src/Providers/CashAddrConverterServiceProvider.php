<?php

namespace Submtd\CashAddrConverter\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The CashAddrConverterServiceProvider class is the main
 * entry point for the package.
 */
class CashAddrConverterServiceProvider extends ServiceProvider
{
    /**
     * The service provider register method
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cash-addr-converter', 'Submtd\CashAddrConverter\CashAddrConverter');
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
