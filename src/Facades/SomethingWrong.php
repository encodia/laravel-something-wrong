<?php

namespace Encodia\SomethingWrong\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Encodia\SomethingWrong\SomethingWrong
 */
class SomethingWrong extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-something-wrong';
    }
}
