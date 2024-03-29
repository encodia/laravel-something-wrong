<?php

namespace Encodia\SomethingWrong;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SomethingWrongServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-something-wrong')
            ->hasConfigFile();

        app()->bind('laravel-something-wrong', SomethingWrong::class);
    }
}
