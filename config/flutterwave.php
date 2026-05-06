<?php

/*
 * This file is part of the Laravel Rave package.
 *
 * (c) Oluwole Adebiyi - Flamez <flamekeed@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Flutterwave Config (using your RAVE_* .env keys)
    |--------------------------------------------------------------------------
    */

    'publicKey' => env('RAVE_PUBLIC_KEY'),

    'secretKey' => env('RAVE_SECRET_KEY'),

    'secretHash' => env('RAVE_SECRET_HASH', ''),

    // The package expects "env", so we map it from your RAVE_ENVIRONMENT
    'env' => env('RAVE_ENVIRONMENT', 'staging'),

];

