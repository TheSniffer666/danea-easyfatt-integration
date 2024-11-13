<?php

namespace Lucap\DaneaEasyfatt;

use Illuminate\Support\Facades\Facade;

class DaneaEasyfatt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'danea-easyfatt';
    }
}
