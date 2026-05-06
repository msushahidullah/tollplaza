<?php 

return [
    'mode'    => 'sandbox', // Fixed to 'sandbox'
    'sandbox' => [
        'client_id'     => env('PAYPAL_CLIENT_ID'),
        'client_secret' => env('PAYPAL_SECRET'),
        'app_id'        => '',
    ],
];
 


