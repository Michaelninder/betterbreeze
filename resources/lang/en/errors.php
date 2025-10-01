<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Error Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    '401' => [
        'message' => 'Unauthorized',
        'description' => 'You are not authorized to access this page.',
    ],
    '403' => [
        'message' => 'Forbidden',
        'description' => 'You do not have permission to access this page.',
    ],
    '404' => [
        'message' => 'Not Found',
        'description' => 'The page you are looking for could not be found.',
    ],
    '419' => [
        'message' => 'Page Expired',
        'description' => 'The page has expired. Please refresh and try again.',
    ],
    '429' => [
        'message' => 'Too Many Requests',
        'description' => 'You have made too many requests. Please try again later.',
    ],
    '500' => [
        'message' => 'Internal Server Error',
        'description' => 'An unexpected error occurred. Please try again later.',
    ],
    '503' => [
        'message' => 'Service Unavailable',
        'description' => 'The service is currently unavailable. Please try again later.',
    ],
    'default' => [
        'message' => 'An unexpected error occurred',
        'description' => 'An unexpected error occurred. Please try again later.',
    ],

];
