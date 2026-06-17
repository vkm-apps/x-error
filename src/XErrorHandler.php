<?php

namespace VkmApps\XError;

use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
class XErrorHandler
{
    public function render($request, Throwable $e, ?int $statusCode = null): Response
    {
        $code = $statusCode ?? ($e instanceof HttpExceptionInterface ? $e->getStatusCode() : 500);

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
            if (config('app.debug')) {
                $exception = $e;
            } else {
                // In production, only show basic details (class, message, file, line) to avoid leaking credentials/passwords
                $exception = sprintf(
                    "[%s] %s\n\nFile: %s\nLine: %d",
                    get_class($e),
                    $e->getMessage(),
                    $e->getFile(),
                    $e->getLine()
                );
            }
        }

        $titleKey = "x-error::errors.$code.title";
        $messageKey = "x-error::errors.$code.message";

        if (! \Illuminate\Support\Facades\Lang::has($titleKey)) {
            $fallbackCode = str_starts_with((string)$code, '4') ? 400 : 500;
            $titleKey = "x-error::errors.$fallbackCode.title";
            $messageKey = "x-error::errors.$fallbackCode.message";
        }

        return response()->view($view, [
            'code'      => $code,
            'title'     => __($titleKey),
            'message'   => __($messageKey),
            'color'     => $color,
            'exception' => $exception,
        ], $code);
    }
}
