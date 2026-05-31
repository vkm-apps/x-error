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
    }

    public function boot(): void
    {
        // Register <x-vkm-error />
        Blade::component('x-error::components.error', 'vkm-error');
        
        // Load ALL package views (default layout + components)
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'x-error');

        // Load package translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'x-error');

        // Resolve ExceptionHandler and register renderable callback
        if ($this->app->bound(ExceptionHandler::class)) {
            $handler = $this->app->make(ExceptionHandler::class);
            $handler->renderable(function (\Throwable $e, $request) {
                if ($request->expectsJson()) {
                    return null;
                }

                $renderer = new XErrorHandler();

                if ($e instanceof \Symfony\Component\HttpKernel\Exception\HttpExceptionInterface) {
                    return $renderer->render($request, $e);
                }

                // In production, render all other exceptions as a 500 error page
                if (! config('app.debug')) {
                    $httpException = new \Symfony\Component\HttpKernel\Exception\HttpException(500, $e->getMessage(), $e);
                    return $renderer->render($request, $httpException);
                }

                return null;
            });
        }
        
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/x-error.php' => config_path('x-error.php')
        ], 'x-error-config');
        
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
