<?php

namespace ErlangParasu\SfStopwatch;

use Symfony\Component\Stopwatch\Stopwatch;

/**
 * Class SfStopwatch
 * @package ErlangParasu\SfStopwatch
 */
class SfStopwatch
{
    protected $stopwatch = null;

    protected $stateIsStart = true;

    protected $uuid = '';

    protected $number = 0;

    protected $isEnabled = false;

    public function __construct($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        $this->uuid = strtoupper(\Str::random(8));
        $this->stopwatch = new Stopwatch(true);
    }

    public function x()
    {
        if ($this->number === 0) {
            $this->start();
        } else {
            $this->stop();
            $this->start();
        }
    }

    protected function start()
    {
        $this->stateIsStart != $this->stateIsStart;

        $this->number = $this->number + 1;
        $number = $this->number;
        $uuid = $this->uuid;
        $this->stopwatch = new Stopwatch();
        $this->stopwatch->start('watch_'.$uuid.'_'.$number);
    }

    protected function stop()
    {
        $this->stateIsStart != $this->stateIsStart;

        $number = $this->number;
        $uuid = $this->uuid;
        $sw = $this->stopwatch;

        if ($this->isEnabled) {
            logger('stopwatch:', [(string) $sw->stop('watch_'.$uuid.'_'.$number)]);
        }
    }
}
