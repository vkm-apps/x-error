<?php

namespace VkmApps\XError;

use Blade;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class XErrorServiceProvider extends ServiceProvider
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
                // 1. Keep default Laravel behavior for API/JSON requests
                if ($request->expectsJson() || $request->is('api/*') || $request->wantsJson()) {
                    return null;
                }

                // 2. Keep default Laravel behavior for validation, authentication, and direct HTTP response exceptions
                if ($e instanceof ValidationException ||
                    $e instanceof AuthenticationException ||
                    $e instanceof HttpResponseException) {
                    return null;
                }

                // 3. Keep default debugger (Ignition) in local development or if app.debug is true
                if (config('app.debug') || $this->app->environment('local', 'testing')) {
                    return null;
                }

                // 4. Resolve status code (default to 500 for generic exceptions in production)
                $statusCode = 500;
                if ($e instanceof HttpExceptionInterface) {
                    $statusCode = $e->getStatusCode();
                }

                return (new XErrorHandler())->render($request, $e, $statusCode);
            });
        }

        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/x-error.php' => config_path('x-error.php')
        ], 'x-error:config');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/x-error'),
        ], 'x-error:views');

        // Publish translations
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/x-error'),
        ], 'x-error:lang');
    }
}
