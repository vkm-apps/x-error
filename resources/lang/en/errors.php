<?php

return [
    '400' => [
        'title' => 'Bad Request',
        'message' => 'The server could not understand your request. Please check the information provided and try again.',
    ],
    '401' => [
        'title' => 'Unauthorized',
        'message' => 'You are not authorized to access this resource. Please check your credentials and try again.',
    ],
    '402' => [
        'title' => 'Payment Required',
        'message' => 'This action requires payment. Please settle your account to continue.',
    ],
    '403' => [
        'title' => 'Forbidden',
        'message' => 'You do not have permission to access this page or perform this action.',
    ],
    '404' => [
        'title' => 'Not Found',
        'message' => 'We couldn’t find the page you were looking for. It may have been moved or deleted.',
    ],
    '405' => [
        'title' => 'Method Not Allowed',
        'message' => 'The action you are trying is not allowed. Please check the request method.',
    ],
    '406' => [
        'title' => 'Not Acceptable',
        'message' => 'The server cannot provide a response that matches your request criteria.',
    ],
    '407' => [
        'title' => 'Proxy Authentication Required',
        'message' => 'Please provide valid proxy credentials to access this resource.',
    ],
    '408' => [
        'title' => 'Request Timeout',
        'message' => 'Your request took too long. Please check your connection and try again.',
    ],
    '409' => [
        'title' => 'Conflict',
        'message' => 'There is a conflict with the current state of the resource. Please review your request.',
    ],
    '410' => [
        'title' => 'Gone',
        'message' => 'The resource you are trying to access has been permanently removed.',
    ],
    '411' => [
        'title' => 'Length Required',
        'message' => 'Please include a valid Content-Length header in your request.',
    ],
    '412' => [
        'title' => 'Precondition Failed',
        'message' => 'Your request did not meet the required conditions specified by the server.',
    ],
    '413' => [
        'title' => 'Payload Too Large',
        'message' => 'Your request is too large to process. Please reduce the size and try again.',
    ],
    '414' => [
        'title' => 'URI Too Long',
        'message' => 'The URL you requested is too long. Try shortening it and resubmit.',
    ],
    '415' => [
        'title' => 'Unsupported Media Type',
        'message' => 'The server cannot process this media type. Please adjust your request format.',
    ],
    '416' => [
        'title' => 'Range Not Satisfiable',
        'message' => 'The range you requested is not available for this resource.',
    ],
    '417' => [
        'title' => 'Expectation Failed',
        'message' => 'The server could not meet the expectations specified in your request.',
    ],
    '418' => [
        'title' => 'Unsuported Request',
        'message' => 'The server refuses to process this request as it is not supported. Please review your request and try again.',
    ],
    '419' => [
        'title' => 'Page Expired',
        'message' => 'Your session has expired. Please reload the page and try again.',
    ],
    '421' => [
        'title' => 'Misdirected Request',
        'message' => 'Your request was sent to the wrong server. Please try again.',
    ],
    '422' => [
        'title' => 'Unprocessable Entity',
        'message' => 'We could not process your request due to invalid data. Please review and try again.',
    ],
    '423' => [
        'title' => 'Locked',
        'message' => 'The resource is currently locked and cannot be modified. Please try later.',
    ],
    '424' => [
        'title' => 'Failed Dependency',
        'message' => 'This request failed because a previous related request did not succeed.',
    ],
    '425' => [
        'title' => 'Too Early',
        'message' => 'The server is not ready to process this request yet. Please try again later.',
    ],
    '426' => [
        'title' => 'Upgrade Required',
        'message' => 'Please upgrade your protocol or client to perform this request.',
    ],
    '428' => [
        'title' => 'Precondition Required',
        'message' => 'This request requires certain conditions to be met. Please include the necessary headers.',
    ],
    '429' => [
        'title' => 'Too Many Requests',
        'message' => 'You have submitted too many requests in a short period. Please wait a moment and try again.',
    ],
    '431' => [
        'title' => 'Request Header Fields Too Large',
        'message' => 'The headers of your request are too large. Please reduce the size and try again.',
    ],
    '451' => [
        'title' => 'Unavailable For Legal Reasons',
        'message' => 'Access to this resource is restricted due to legal or regulatory reasons.',
    ],
    '500' => [
        'title' => 'Server Error',
        'message' => 'An unexpected error occurred on the server. Please try again later or contact support if the issue persists.',
    ],
    '501' => [
        'title' => 'Not Implemented',
        'message' => 'This functionality is not supported by the server.',
    ],
    '502' => [
        'title' => 'Bad Gateway',
        'message' => 'The server received an invalid response from an upstream server. Please try again.',
    ],
    '503' => [
        'title' => 'Service Unavailable',
        'message' => 'Our platform is currently undergoing maintenance. We expect to be back online shortly. Thank you for your patience.',
    ],
    '504' => [
        'title' => 'Gateway Timeout',
        'message' => 'The server timed out while waiting for a response. Please try again later.',
    ],
    '505' => [
        'title' => 'HTTP Version Not Supported',
        'message' => 'The server does not support the HTTP version used in this request.',
    ],
    '506' => [
        'title' => 'Variant Also Negotiates',
        'message' => 'The server encountered an internal configuration error. Please try again later.',
    ],
    '507' => [
        'title' => 'Insufficient Storage',
        'message' => 'The server cannot store the data needed to complete this request.',
    ],
    '508' => [
        'title' => 'Loop Detected',
        'message' => 'The server detected an infinite loop while processing the request.',
    ],
    '510' => [
        'title' => 'Not Extended',
        'message' => 'This request requires additional extensions that are not supported by the server.',
    ],
    '511' => [
        'title' => 'Network Authentication Required',
        'message' => 'You need to authenticate to gain network access. Please provide credentials.',
    ],
];
