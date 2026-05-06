<?php

namespace App\Services;

use Braintree\Gateway;

class BraintreeService
{
    protected $gateway;

    public function __construct()
    {
       
        $this->gateway = new Gateway([
            'environment' => env('BRAINTREE_ENV', 'sandbox'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);
    }

    public function getGateway()
    {
        return $this->gateway;
    }

    public function createTransaction($amount, $paymentMethodNonce)
    {
        return $this->gateway->transaction()->sale([
            'amount'             => $amount,
            'paymentMethodNonce' => $paymentMethodNonce,
            'options'            => ['submitForSettlement' => true],
        ]);
    }
}
