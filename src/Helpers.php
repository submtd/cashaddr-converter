<?php

if (!function_exists('convertToCashaddr')) {
    function convertToCashaddr($address)
    {
        return Submtd\CashaddrConverter\Facades\CashaddrConverterFacade::convertToCashaddr($address);
    }
}

if (!function_exists('convertFromCashaddr')) {
    function convertFromCashaddr($address)
    {
        return Submtd\CashaddrConverter\Facades\CashaddrConverterFacade::convertFromCashaddr($address);
    }
}
