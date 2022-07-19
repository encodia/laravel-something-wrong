[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Something wrong

[![Latest Version on Packagist](https://img.shields.io/packagist/v/encodia/laravel-something-wrong.svg?style=flat-square)](https://packagist.org/packages/encodia/laravel-something-wrong)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/encodia/laravel-something-wrong/run-tests?label=tests)](https://github.com/encodia/laravel-something-wrong/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/encodia/laravel-something-wrong/Check%20&%20fix%20styling?label=code%20style)](https://github.com/encodia/laravel-something-wrong/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/encodia/laravel-something-wrong.svg?style=flat-square)](https://packagist.org/packages/encodia/laravel-something-wrong)

A simple package for Laravel to notify handled errors, exceptions and more.

**Note**: this package is still under development and currently its features are very limited.

## Installation

You can install the package via composer:

```bash
composer require encodia/laravel-something-wrong
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-something-wrong-config"
```

## Usage

Note: the current version only supports **Bugsnag**.

This means that anything you notify will use Bugsnag under the hood to send
a notification.

### Where

Typically, you will inject `Encodia\SomethingWrong` in your service class constructor:

```php

use \Encodia\SomethingWrong;

class MyService {
    private SomethingWrong $somethingWrong;

    public function __construct(SomethingWrong $somethingWrong)
    {        
        $this->somethingWrong = $somethingWrong;
    }
    
    public function doSomething(): void
    {
        // ...
        $this->somethingWrong
            ->exception(
                new \Exception("This wasn't supposed to happen, so let's notify it!")
        );
        
        // ...        
    }
}

    
```

If you prefer, you can use its facade:

```php
use \Encodia\SomethingWrong\Facades\SomethingWrong;

// ...
SomethingWrong::exception(
    new \Exception("This wasn't supposed to happen, so let's notify it!")
);

```

### How

You can notify a simple exception, without any further details:

```php
SomethingWrong::exception(
    new \Exception("Something wrong happened!")
);

```

If you need to add any details, just pass an array as second argument:

```php
SomethingWrong::exception(
    new \Exception("Something wrong happened!"),
    [
        'foo' => 'bar',
        'path' => 'a/b/c',
        'user' => auth()->user,
    ],
);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Erik D'Ercole](https://github.com/eleftrik)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
