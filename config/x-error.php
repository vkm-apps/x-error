<?php

return [

    // Your Custom layout view - You should manually pass <x-error ... /> component
    'layout' => null,

    // Only Authorized users with the below exception can view details of an error exception...
    'exception' => [
        // Enable or Disable exception details on the view
        'enabled' => false,

        // Null -> means all auth users will view the exception unless you specify an exception ex. canViewExceptions.
        'permission' => null,
    ],

    // Default Tailwind colors per status code
    'colors' => [
        '401' => 'text-yellow-600',
        '403' => 'text-yellow-500',
        '404' => 'text-blue-500',
        '419' => 'text-orange-500',
        '422' => 'text-red-500',
        '429' => 'text-purple-500',
        '500' => 'text-red-600',

        // fallback if code not defined
        'default' => 'text-black dark:text-white',
    ],
];
