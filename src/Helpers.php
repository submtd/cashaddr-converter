<?php


function convertToCashaddr($address)
{
    return Submtd\CashaddrConverter\Facades\CashaddrConverterFacade::convertToCashaddr($address);
}

function convertFromCashaddr($address)
{
    return Submtd\CashaddrConverter\Facades\CashaddrConverterFacade::convertFromCashaddr($address);
}
