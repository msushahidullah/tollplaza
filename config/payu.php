<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Gateway
    |--------------------------------------------------------------------------
    |
    | This option controls the default gateway that will be used by the
    | Payu package. You may set this to "money" or "biz".
    |
    */
    'default' => env('PAYU_DEFAULT', 'money'),

    /*
    |--------------------------------------------------------------------------
    | Gateways Configuration
    |--------------------------------------------------------------------------
    |
    | Define all gateway connections here. You don’t need to instantiate
    | classes. Just provide config values. The package will handle
    | the object creation internally.
    |
    */
    'gateways' => [
        'money' => [
            'mode' => env('PAYU_METHOD', 'test'), // test or secure
            'key'  => env('PAYU_MERCHANT_KEY'),
            'salt' => env('PAYU_MERCHANT_SALT'),
            'auth' => env('PAYU_AUTH_HEADER'),
        ],

        'biz' => [
            'mode' => env('PAYU_METHOD', 'test'), // test or secure
            'key'  => env('PAYU_MERCHANT_KEY'),
            'salt' => env('PAYU_MERCHANT_SALT'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Verification Status
    |--------------------------------------------------------------------------
    |
    | Here you can specify which transaction statuses should be verified
    | again with Payu servers.
    |
    */
    'verify' => [
        'pending',
    ],
];
