<?php

namespace Nafisphp\NafisUtils\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nafisphp\NafisUtils\NafisUtils
 */
class NafisUtils extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nafisphp\NafisUtils\NafisUtils::class;
    }
}
