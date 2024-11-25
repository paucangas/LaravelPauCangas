<?php

return [
    'default' => [
        'name' => env('DEFAULT_USER_NAME', 'Default User'),
        'email' => env('DEFAULT_USER_EMAIL', 'default@example.com'),
        'password' => env('DEFAULT_USER_PASSWORD', 'default_password'),
    ],
    'professor' => [
        'name' => env('PROFESSOR_USER_NAME', 'Professor User'),
        'email' => env('PROFESSOR_USER_EMAIL', 'professor@example.com'),
        'password' => env('PROFESSOR_USER_PASSWORD', 'professor_password'),
    ],
];
