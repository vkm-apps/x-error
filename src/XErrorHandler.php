<?php

namespace VkmApps\XError;

use Symfony\Component\HttpFoundation\Response;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as BaseHandler;

class XErrorHandler extends BaseHandler
{
    public function render($request, Throwable $e): Response
    {
        // Only handle HTTP exceptions (404, 403, 500, etc.)
        if (! method_exists($e, 'getStatusCode')) {
            return parent::render($request, $e);
        }

        $code = $e->getStatusCode();

        $view = config('x-error.layout_view') ?: 'x-error::error';

        $color = config("x-error.colors.$code", config('x-error.colors.default'));

        $exception = null;
        if (!auth()->check() && config('x-error.exception.enabled')) {

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
