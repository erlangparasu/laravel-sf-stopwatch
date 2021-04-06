<?php

namespace ErlangParasu\SfStopwatch;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use ErlangParasu\SfStopwatch\SfStopwatch;
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
                __DIR__ . '/../resources/config/laravel-sf_stopwatch.php' => config_path('laravel-sf_stopwatch.php'),
            ]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('laravel-sf_stopwatch');
        }
    }

    public function register()
    {
        $this->app->bind('sf_stopwatch', function ($app) {
            return new SfStopwatch(
                config('laravel-sf_stopwatch.server_key')
            );
        });
    }
}
