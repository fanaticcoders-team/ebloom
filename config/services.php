<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    
    'google' => [
        'client_id' => '270877021377-04svcki168op1t1nc8o908fa9glqnpuu.apps.googleusercontent.com',
        'client_secret' => 'rijw8x1jATYQ9xqHM7Cef4Im',
        'redirect' => 'https://ebloom.gr/auth/google/callback',
    ],
    //ebloom.gr facebook app
    
    'facebook' => [
        'client_id' => '316479853411200',
        'client_secret' => '137b1f2d188c3cb0e02862d6e5d4e89b',
        'redirect' => 'https://ebloom.gr/callback',
    ],

    //ebloom facebook app

    // 'facebook' => [
    //     'client_id' => '340345151016943',
    //     'client_secret' => '815e8d490a5cce140ed8af96533130f5',
    //     'redirect' => 'https://ebloom.gr/callback',
    // ],

];
// 'client_id' => '340345151016943',
// 'client_secret' => '815e8d490a5cce140ed8af96533130f5',
