<?php

namespace ErlangParasu\SfStopwatch;

use Illuminate\Support\Facades\Facade;

/**
 * Class SfStopwatchFacade
 * @package ErlangParasu\SfStopwatch\Facades
 */
class SfStopwatchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sf_stopwatch';
    }
}
