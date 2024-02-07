<?php


namespace Cabard\Viewpack;

use Illuminate\Support\ServiceProvider;

/**
 * Class ViewpackServiceProvider. Установщик пакета для Laravel
 * @package Cabard\Netbot
 */
class ViewpackServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'viewpack');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/viewpack'),
        ], 'views');
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/viewpack'),
        ], 'public');
    }
}
