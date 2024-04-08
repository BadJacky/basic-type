<?php

namespace BadJacky\BasicType;

use Illuminate\Support\Facades\Facade;

/**
 * @see BasicType
 */
class BasicTypeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'basic-type';
    }
}
