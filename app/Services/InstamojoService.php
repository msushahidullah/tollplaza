<?php
namespace App\Services;

use Instamojo\Instamojo;

class InstamojoService
{
    protected $apiKey;
    protected $authToken;
    protected $url;

    public function __construct()
    {
        $this->apiKey = env('IM_API_KEY');
        $this->authToken = env('IM_AUTH_TOKEN');
        $this->url = env('IM_URL');
    }

    public function createPaymentRequest($name, $email, $amount, $redirectUrl, $webhookUrl)
    {
        $api = new Instamojo($this->apiKey, $this->authToken, $this->url);
        try {
            $response = $api->paymentRequestCreate(array(
                "purpose" => "Payment for " . $name,
                "amount" => $amount,
                "send_email" => true,
                "email" => $email,
                "redirect_url" => $redirectUrl,
                "webhook_url" => $webhookUrl,
            ));

            return $response;
        } catch (Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function getPaymentStatus($paymentId)
    {
        $api = new Instamojo($this->apiKey, $this->authToken, $this->url);
        try {
            $paymentDetails = $api->paymentRequestStatus($paymentId);
            return $paymentDetails;
        } catch (Exception $e) {
            // Handle error
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
