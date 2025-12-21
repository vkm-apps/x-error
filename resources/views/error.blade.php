<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Error' }} | {{ config('app.name') }}</title>

    <style>
        html { color-scheme: light dark; }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center p-6">

<x-error
    :code="$code"
    :title="$title"
    :color="$color"
    :message="$message"
    :exception="$exception"
/>

</body>
</html>
