<?php

namespace VkmApps\XError;

use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

class XErrorHandler extends BaseHandler
{
    public function render($request, Throwable $e): Response
    {
        /**
         * Normalize the exception FIRST
         * (this converts route / model / auth exceptions into HTTP exceptions)
         */
        $e = $this->prepareException($e);

        /**
         * Only handle real HTTP exceptions
         */
        if (! $e instanceof HttpExceptionInterface) {
            return parent::render($request, $e);
        }

        $code = $e->getStatusCode();

        $view = config('x-error.layout') ?: 'x-error::error';

        $color = config("x-error.colors.$code", config('x-error.colors.default'));

        $exception = null;

        if (auth()->check() && config('x-error.exception.enabled')) {

            $permission = config('x-error.exception.permission');

            // If no permission is required → show exception to all authenticated users
            if (! $permission) {
                $exception = $e;
            }
            // If permission is required → show exception only to users who have it
            elseif (auth()->user()->can($permission)) {
                $exception = $e;
            }
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
