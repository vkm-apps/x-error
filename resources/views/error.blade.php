<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Error' }} | {{ config('app.name') }}</title>

    <style>
        html { color-scheme: light dark; }
        
        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            min-height: 100vh;
            background-color: #f3f4f6;
            color: #1f2937;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            box-sizing: border-box;
        }
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #111827;
                color: #f9fafb;
            }
        }

        /* Standalone fallback layouts matching Tailwind styles */
        .w-full.min-h-screen.flex-col {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            overflow-y: auto;
        }
        .text-center {
            text-align: center;
            width: 100%;
        }
        @media (min-width: 640px) {
            .sm\:w-11\/12 { max-width: 91.666667%; }
        }
        @media (min-width: 768px) {
            .md\:w-2\/3 { max-width: 66.666667%; }
        }
        @media (min-width: 1024px) {
            .lg\:w-1\/2 { max-width: 50%; }
        }
        @media (min-width: 1280px) {
            .xl\:w-1\/3 { max-width: 33.333333%; }
        }

        .flex.flex-col.items-center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1.text-8xl {
            font-size: 6rem;
            font-weight: 900;
            letter-spacing: 0.1em;
            margin: 0;
            opacity: 0.9;
        }
        .text-zinc-600 { color: #52525b; }
        @media (prefers-color-scheme: dark) {
            .dark\:text-white { color: #ffffff; }
        }

        .text-2xl {
            font-size: 1.5rem;
            font-weight: 200;
        }
        .dark\:text-white\/60 {
            color: rgba(255, 255, 255, 0.6);
        }

        .mt-2.text-sm {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            font-weight: 300;
        }
        .text-black\/80 {
            color: rgba(0, 0, 0, 0.8);
        }
        @media (prefers-color-scheme: dark) {
            .dark\:text-white\/80 {
                color: rgba(255, 255, 255, 0.8);
            }
        }

        .flex.justify-center.mt-8 {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
        .px-20.py-2 {
            padding-left: 5rem;
            padding-right: 5rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-weight: 500;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: opacity 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        .text-zinc-500 {
            color: #71717a;
            border: 2px solid #a1a1aa;
        }
        @media (prefers-color-scheme: dark) {
            .dark\:text-zinc-500 {
                color: #a1a1aa;
            }
            .dark\:border-zinc-500 {
                border-color: #71717a;
            }
        }
        .px-20.py-2:hover {
            opacity: 0.8;
            box-shadow: none;
        }

        details.container {
            width: 100%;
            max-width: 56rem;
            margin-top: 2rem;
            padding: 1rem;
            border-radius: 0.375rem;
            background-color: #f4f4f5;
            box-sizing: border-box;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        @media (prefers-color-scheme: dark) {
            details.container {
                background-color: #27272a;
            }
        }
        summary.cursor-pointer {
            cursor: pointer;
            font-size: 0.875rem;
            font-weight: 500;
            color: #3f3f46;
            outline: none;
        }
        @media (prefers-color-scheme: dark) {
            summary.cursor-pointer {
                color: #d4d4d8;
            }
        }
        pre.mt-3 {
            margin-top: 0.75rem;
            max-height: 30vh;
            overflow: auto;
            font-size: 0.75rem;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            line-height: 1.625;
            padding: 1rem;
            border-radius: 0.5rem;
            border: 1px solid #d4d4d8;
            background-color: #18181b;
            color: #f4f4f5;
            white-space: pre-wrap;
            box-sizing: border-box;
        }
        @media (prefers-color-scheme: dark) {
            pre.mt-3 {
                border-color: #3f3f46;
                background-color: #09090b;
                color: #e4e4e7;
            }
        }
    </style>
</head>

<body>

<x-vkm-error
    :code="$code"
    :title="$title"
    :color="$color"
    :message="$message"
    :exception="$exception"
/>

</body>
</html>
