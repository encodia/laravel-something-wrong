
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Something wrong

[![Latest Version on Packagist](https://img.shields.io/packagist/v/encodia/laravel-something-wrong.svg?style=flat-square)](https://packagist.org/packages/encodia/laravel-something-wrong)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/encodia/laravel-something-wrong/run-tests?label=tests)](https://github.com/encodia/laravel-something-wrong/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/encodia/laravel-something-wrong/Check%20&%20fix%20styling?label=code%20style)](https://github.com/encodia/laravel-something-wrong/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/encodia/laravel-something-wrong.svg?style=flat-square)](https://packagist.org/packages/encodia/laravel-something-wrong)

A simple package for Laravel to notify handled errors, exceptions and more

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

@TODO 

```php
$somethingWrong = new Encodia\SomethingWrong();
echo $somethingWrong->echoPhrase('Hello, Encodia!');
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
