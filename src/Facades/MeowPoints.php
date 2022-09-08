<?php

namespace VendorName\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\MeowPoints
 */
class MeowPoints extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \VendorName\Skeleton\MeowPoints::class;
    }
}
