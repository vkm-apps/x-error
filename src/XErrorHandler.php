<?php

namespace VkmApps\XError;

use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
class XErrorHandler
{
    public function render($request, HttpExceptionInterface $e): Response
    {
        $code = $e->getStatusCode();

        $view = config('x-error.layout') ?: 'x-error::error';

        $color = config("x-error.colors.$code", config('x-error.colors.default'));

        $exception = null;

        $showException = false;

        try {
            if (config('x-error.exception.enabled') && auth()->check()) {
                $permission = config('x-error.exception.permission');

                // If no permission is required → show exception to all authenticated users
                if (! $permission) {
                    $showException = true;
                }
                // If permission is required → show exception only to users who have it
                elseif (auth()->user()->can($permission)) {
                    $showException = true;
                }
            }
        } catch (Throwable) {
            // Suppress errors during session / database lookup failures (prevent WSOD loops)
        }

        // Show exception details in local/debug mode automatically
        if (config('app.debug') && config('x-error.exception.enabled', true)) {
            $showException = true;
        }

        if ($showException) {
            $exception = $e;
        }

        return response()->view($view, [
            'code'      => $code,
            'title'     => __("x-error::errors.$code.title"),
            'message'   => __("x-error::errors.$code.message"),
            'color'     => $color,
            'exception' => $exception,
        ], $code);
    }
}
