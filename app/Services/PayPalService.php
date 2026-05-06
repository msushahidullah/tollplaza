<?php
namespace App\Services;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPalService
{
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id'),
                config('paypal.client_secret')
            )
        );

        $this->apiContext->setConfig(config('paypal.settings'));
    }

    public function getApiContext()
    {
        return $this->apiContext;
    }
}
