@props([
    'logo' => null,
    'code' => null,
    'title' => null,
    'message' => null,
    'exception' => null,
    'color' => null,
    'homeUrl' => '/',
    'homeTitle' => __('Home'),
    'homeBtn' => 'px-20 py-2 font-medium text-zinc-500 dark:text-zinc-500 border-2 border-zinc-400 dark:border-zinc-500 rounded-md shadow-sm hover:shadow-none hover:opacity-80',
])

<div {{ $attributes->merge(['class' => 'w-full flex flex-col items-center justify-center gap-4 h-screen']) }}>
    <div class="text-center w-full sm:w-11/12 md:w-2/3 lg:w-1/2 xl:w-1/3">

        @if ($logo)
            {{ $logo }}

            <hr class="border-light my-12">
        @endif

        <div class="flex flex-col items-center">
            <h1 class="text-8xl font-black tracking-widest {{ $color }} opacity-90 text-shadow-lg">
                {{ $code }}
            </h1>

            @if ($title)
                <div class="text-2xl {{ $color }} dark:text-white/60 font-extralight">
                    {{ $title }}
                </div>
            @endif

            @if ($message)
                <div class="mt-2 text-sm text-black/80 dark:text-white/80 font-light">
                    {{ $message }}
                </div>
            @endif

            @php
                $permission = config('x-error.exception_permission');
            @endphp

            {{ $slot }}
        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ $homeUrl }}" class="{{ $homeBtn }}">
                {{ $homeTitle }}
            </a>
        </div>
    </div>

    @if ($exception)
        <details class="container mx-auto px-4 w-full max-w-4xl bg-zinc-100 dark:bg-zinc-800 rounded-md p-4 shadow-sm">
            <summary class="cursor-pointer text-sm font-medium text-zinc-700 dark:text-zinc-300">
                {{ __('Exception Details') }}
            </summary>

            <pre
                class="mt-3 max-h-64 overflow-y-auto text-xs font-mono leading-relaxed p-4 rounded-lg border border-zinc-300 dark:border-zinc-700 bg-zinc-900 text-zinc-100 dark:bg-zinc-950 dark:text-zinc-200 whitespace-pre-wrap shadow-inner"
            >
                {{ $exception }}
            </pre>
        </details>
    @endif
</div>
