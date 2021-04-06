<?php

namespace ErlangParasu\SfStopwatch;

use Symfony\Component\Stopwatch\Stopwatch;

/**
 * Class SfStopwatch
 * @package ErlangParasu\SfStopwatch
 */
class SfStopwatch
{
    private $stopwatch = null;

    private $stateIsStart = true;

    private $uuid = '';

    private $number = 0;

    private $isEnabled = false;

    public function __construct($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        $this->uuid = strtoupper(\Str::random(8));
        $this->stopwatch = new Stopwatch(true);
    }

    public function x()
    {
        if (null == $this->stopwatch) {
            return;
        }

        if ($this->stateIsStart) {
            $this->stateIsStart != $this->stateIsStart;

            $this->number = $this->number + 1;
            $number = $this->number;
            $uuid = $this->uuid;
            $this->stopwatch = new Stopwatch();
            $this->stopwatch->start('watch_'.$uuid.'_'.$number);
        } else {
            $this->stateIsStart != $this->stateIsStart;

            $number = $this->number;
            $uuid = $this->uuid;
            $sw = $this->stopwatch;

            if ($this->isEnabled) {
                logger('stopwatch:', [$uuid, $number, (string) $sw->stop('watch_'.$uuid.'_'.$number)]);
            }
        }
    }
}
