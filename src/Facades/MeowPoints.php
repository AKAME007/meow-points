<?php

namespace AhmedTofaha\MeowPoints\Facades;

use Illuminate\Support\Facades\Facade;

class MeowPoints extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AhmedTofaha\MeowPoints\MeowPoints::class;
    }
}
