<?php

namespace Clevertek\LaravelDDD\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Clevertek\LaravelDDD\LaravelDDD
 */
class LaravelDDD extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Clevertek\LaravelDDD\LaravelDDD::class;
    }
}
