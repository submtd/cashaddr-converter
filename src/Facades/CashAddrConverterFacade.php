<?php

namespace Submtd\CashAddrConverter\Facades;

use Illuminate\Support\Facades\Facade;

class CashAddrConverterFacade extends Facade
{
    /**
     * returns the facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cash-addr-converter';
    }
}
