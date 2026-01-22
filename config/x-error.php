<?php

return [

    // Custom layout view (must manually include <x-error /> component)
    'layout' => null,

    // Controls who can view exception details
    'exception' => [
        // Show or hide exception details on error pages
        'enabled' => false,

        // Tile to show before exception
        'title' => 'Exception Details',

        // Permission required to view exceptions (null = all authenticated users)
        'permission' => null,
    ],

    // Tailwind text colors mapped to HTTP status codes, see ex. 401
    'colors' => [
//        '401' => 'text-yellow-600',

        // Fallback color for undefined status codes
        'default' => 'text-zinc-600 dark:text-white',
    ],

    // Redirect button shown on error pages (except 503)
    'button' => [
        // Set to null to hide the button
        'url' => '/',

        // Button CSS classes
        'class' => 'px-20 py-2 font-medium text-zinc-500 dark:text-zinc-500 border-2 border-zinc-400 dark:border-zinc-500 rounded-md shadow-sm hover:shadow-none hover:opacity-80',

        // Button label
        'text' => 'Home',
    ],
];
