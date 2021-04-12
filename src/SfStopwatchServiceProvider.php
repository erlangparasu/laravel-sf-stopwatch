<?php

namespace ErlangParasu\SfStopwatch;

use ErlangParasu\SfStopwatch\SfStopwatch;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

/**
 * Class SfStopwatchServiceProvider
 * @package ErlangParasu\SfStopwatch\Providers
 */
class SfStopwatchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/config/sf-stopwatch.php' => config_path('sf-stopwatch.php'),
            ]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('sf-stopwatch');
        }
    }

    public function register()
    {
        $this->app->singleton('sf_stopwatch', function ($app) {
            return new SfStopwatch(
                config('sf-stopwatch.sf_stopwatch_enabled')
            );
        });
    }
}
