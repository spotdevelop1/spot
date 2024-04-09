<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
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
     // Añade aquí tu configuración de Openpay
     'openpay' => [
        'id' => env('OPENPAY_ID'), // ID de Openpay
        'private_key' => env('OPENPAY_PRIVATE_API_KEY'), // Llave Privada de Openpay
        'public_key' => env('OPENPAY_PUBLIC_API_KEY'), // Llave Pública de Openpay
        'sandbox_url' => env('OPENPAY_SANDBOX_URL'), // URL del sandbox
        'production_mode' => env('OPENPAY_PRODUCTION_MODE', false), // Modo de producción
    ],    

];
