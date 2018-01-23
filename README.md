# CashaddrConverter
Converts old Bitcoin Cash addresses to the new CashAddr format and vice versa in a Laravel friendly package. Based off [Har01d's CashAddressPHP code](https://github.com/Har01d/CashAddressPHP).

## Installation

Begin by pulling in the package through Composer.

```bash
composer require submtd/cashaddr-converter
```

Next, if you are using Laravel 5.4, you will need to include the service provider and optionally, the alias in your `config/app.php` file. If you are using Laravel 5.5, these will be discovered automatically.

```php
'providers' => [
    Submtd\CashaddrConverter\Providers\CashaddrConverterServiceProvider::class,
];

'aliases' => [
    'CashaddrConverter' => Submtd\CashaddrConverter\Facades\CashaddrConverterFacade::class,
];
```

## Usage

A facade and a helper function are provided to make it super simple to use.

### Using the facade
```php
// convert from a legacy address to a cashaddr address
$legacyAddress = '1PchCm7XXAjifhpchPB8wR2WG5rzMFqjnR';
CashaddrConverter::convertToCashaddr($legacyAddress);
// returns bitcoincash:qrup9c40gr9usrz6m7rg7rknjmsp685r2yhxkdx8tf

// convert from a cashaddr address to a legacy address
$cashaddrAddress = 'bitcoincash:qrup9c40gr9usrz6m7rg7rknjmsp685r2yhxkdx8tf';
CashaddrConverter::convertFromCashaddr($cashaddrAddress);
// returns 1PchCm7XXAjifhpchPB8wR2WG5rzMFqjnR
```

### Using the helper functions
```php
// convert from a legacy address to a cashaddr address
$legacyAddress = '1PchCm7XXAjifhpchPB8wR2WG5rzMFqjnR';
convertToCashaddr($legacyAddress);
// returns bitcoincash:qrup9c40gr9usrz6m7rg7rknjmsp685r2yhxkdx8tf

// convert from a cashaddr address to a legacy address
$cashaddrAddress = 'bitcoincash:qrup9c40gr9usrz6m7rg7rknjmsp685r2yhxkdx8tf';
convertFromCashaddr($cashaddrAddress);
// returns 1PchCm7XXAjifhpchPB8wR2WG5rzMFqjnR
```

## Donation

If this project helped you save some development time, feel free to buy me a beer ;)

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=G72FZ5PYP6EZU)
