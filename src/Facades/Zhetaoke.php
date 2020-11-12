<?php

namespace Zhetaoke\Facades;

use Illuminate\Support\Facades\Facade;
use Zhetaoke\Application;

/**
 * @mixin Application
 */
class Zhetaoke extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Application::class;
    }

    /**
     * @return Application
     */
    public static function getFacadeRoot()
    {
        return parent::getFacadeRoot();
    }
}
