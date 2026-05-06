<?php

return [
    'api_key' => env('INSTAMOJO_API_KEY'),
    'auth_token' => env('INSTAMOJO_AUTH_TOKEN'),
    'url' => env('INSTAMOJO_URL', 'https://test.instamojo.com/api/1.1/'), // Use production URL for live
];
