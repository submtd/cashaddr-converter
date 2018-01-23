<?php

namespace Submtd\CashaddrConverter\Facades;

use Illuminate\Support\Facades\Facade;

class CashaddrConverterFacade extends Facade
{
    /**
     * returns the facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cashaddr-converter';
    }
}
