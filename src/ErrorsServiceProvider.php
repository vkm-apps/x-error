<?php

namespace VkmApps\XError;

use Blade;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;

class ErrorsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Merge package config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/x-error.php',
            'x-error'
        );

        // Bind custom exception handler
        $this->app->singleton(
            ExceptionHandler::class,
            XErrorHandler::class
        );
    }

    public function boot(): void
    {
        // Load ALL package views (default layout + components)
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'x-error');

        // Register <x-error />
        Blade::component('x-error::components.error', 'error');

        // Load package translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'x-error');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/x-error'),
        ], 'x-error-views');

        // Publish translations
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/x-error'),
        ], 'x-error-lang');
    }
}
