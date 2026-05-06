<?php

namespace App\Http\Controllers;

use App\FailedTranscations;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use KingFlamez\Rave\Facades\Rave as Flutterwave;

class RavePaymentController extends Controller
{
    /**
     * Initialize payment with Flutterwave
     */
    public function pay(Request $request)
    {
        require_once 'price.php';

        try {
            // Debug: Log configuration status
            Log::info('Flutterwave Config Check', [
                'public_key_set' => !empty(config('flutterwave.publicKey')),
                'secret_key_set' => !empty(config('flutterwave.secretKey')),
                'environment' => config('flutterwave.env')
            ]);

            // Validate configuration first
            if (empty(config('flutterwave.publicKey')) || empty(config('flutterwave.secretKey'))) {
                Log::error('Flutterwave Config Error: Keys not configured properly');
                return redirect(route('order.review'))
                    ->withErrors(__('Payment gateway configuration error. Please contact support.'));
            }

            // Calculate total with conversion
            $total = sprintf("%.2f", getcarttotal() * $conversion_rate);

            // Validate against tampered amount
            if (sprintf("%.2f", $request->actualtotal) != $total) {
                Log::warning('Amount Tampering Detected', [
                    'expected' => $total,
                    'received' => sprintf("%.2f", $request->actualtotal)
                ]);
                return redirect(route('order.review'))
                    ->withErrors(__('Payment has been modified! Please try again!'))
                    ->withInput();
            }

            // Check currency - Fixed: Allow both NGN and currency ID
            $currentCurrency = session()->get('currency')['id'] ?? 'NGN';
            if (!in_array($currentCurrency, ['NGN', 'NG'])) {
                Log::warning('Unsupported Currency', ['currency' => $currentCurrency]);
                return redirect(route('order.review'))
                    ->withErrors(__('Currency not supported! Only NGN is supported.'))
                    ->withInput();
            }

            // Generate unique transaction reference
            $txRef = 'TXN_' . uniqid() . '_' . time();
            
            // Get user details with fallbacks
            $userEmail = $request->email ?? (auth()->check() ? auth()->user()->email : 'guest@example.com');
            $userName = $request->firstname ?? (auth()->check() ? auth()->user()->name : 'Guest User');
            $userPhone = $request->phonenumber ?? '';

            // Prepare payment data
            $paymentData = [
                'tx_ref' => $txRef,
                'amount' => floatval($total),
                'currency' => 'NGN',
                'redirect_url' => route('rave.callback'),
                'customer' => [
                    'email' => $userEmail,
                    'name' => $userName,
                    'phone_number' => $userPhone
                ],
                'customizations' => [
                    'title' => config('app.name', 'Order Payment'),
                    'description' => $request->description ?? ('Payment for order #' . session()->get('order_id')),
                    'logo' => $request->logo ?? config('flutterwave.logo', '')
                ],
                'payment_options' => 'card,banktransfer,ussd,account',
                'meta' => [
                    'order_id' => session()->get('order_id'),
                    'user_id' => auth()->id() ?? 'guest'
                ]
            ];

            Log::info('Flutterwave Payment Init Data', $paymentData);

            // ✅ Initialize Payment with better error handling
            $payment = null;
            try {
                $payment = Flutterwave::initializePayment($paymentData);
            } catch (\Exception $initException) {
                Log::error('Flutterwave API Call Failed', [
                    'exception' => $initException->getMessage(),
                    'data' => $paymentData
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Unable to connect to payment gateway. Please check your internet connection and try again.'));
            }

            // ✅ Handle null or invalid response
            if ($payment === null) {
                Log::error('Flutterwave Init Error: Response was null', [
                    'payment_data' => $paymentData,
                    'config_check' => [
                        'public_key' => substr(config('flutterwave.publicKey'), 0, 10) . '...',
                        'secret_key_present' => !empty(config('flutterwave.secretKey')),
                        'env' => config('flutterwave.env')
                    ]
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Payment gateway returned no response. Please try again or contact support.'));
            }

            if (!is_array($payment)) {
                Log::error('Flutterwave Init Error: Invalid response format', [
                    'response_type' => gettype($payment),
                    'response' => $payment
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Invalid response from payment gateway. Please try again.'));
            }

            if (!isset($payment['status'])) {
                Log::error('Flutterwave Init Error: No status in response', [
                    'response' => $payment
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Incomplete response from payment gateway. Please try again.'));
            }

            if ($payment['status'] !== 'success') {
                Log::error('Flutterwave Init Failed: Status not success', [
                    'status' => $payment['status'],
                    'message' => $payment['message'] ?? 'No message provided',
                    'full_response' => $payment
                ]);
                
                $errorMessage = $payment['message'] ?? 'Could not initialize payment';
                return redirect(route('order.review'))
                    ->withErrors(__('Payment initialization failed: ') . $errorMessage);
            }

            if (empty($payment['data']['link'])) {
                Log::error('Flutterwave Init Error: No payment link in response', [
                    'response_data' => $payment['data'] ?? 'No data section'
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Payment link not provided. Please try again.'));
            }

            // Store transaction reference for verification
            session(['tx_ref' => $txRef, 'payment_amount' => $total]);

            Log::info('Flutterwave Payment Initialized Successfully', [
                'tx_ref' => $txRef,
                'amount' => $total,
                'link' => $payment['data']['link']
            ]);

            // Redirect user to Flutterwave hosted payment page
            return redirect($payment['data']['link']);

        } catch (\Exception $e) {
            Log::error('Flutterwave Payment Exception', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            // Record failed transaction
            try {
                $failedTranscations = new FailedTranscations();
                $failedTranscations->txn_id = 'RAVE_PAY_ERROR_' . Str::uuid();
                $failedTranscations->user_id = auth()->id();
                $failedTranscations->save();
            } catch (\Exception $dbException) {
                Log::error('Failed to save failed transaction', ['error' => $dbException->getMessage()]);
            }

            return redirect(route('order.review'))
                ->withErrors(__('Unexpected error occurred during payment setup. Please try again or contact support.'));
        }
    }

    /**
     * Handle payment callback
     */
    public function callback(Request $request)
    {
        require_once 'price.php';

        try {
            $status = $request->status;
            $txn_id = $request->tx_ref;
            $transaction_id = $request->transaction_id;

            Log::info('Flutterwave Callback Received', [
                'status' => $status,
                'tx_ref' => $txn_id,
                'transaction_id' => $transaction_id,
                'full_request' => $request->all()
            ]);

            // Validate session data
            $sessionTxRef = session('tx_ref');
            $sessionAmount = session('payment_amount');

            if (!$sessionTxRef || $sessionTxRef !== $txn_id) {
                Log::warning('Transaction reference mismatch', [
                    'session_tx_ref' => $sessionTxRef,
                    'callback_tx_ref' => $txn_id
                ]);
                
                return redirect(route('order.review'))
                    ->withErrors(__('Invalid transaction reference. Please try again.'));
            }

            // Only process successful transactions
            if ($status === 'successful' && $transaction_id) {
                
                try {
                    $data = Flutterwave::verifyTransaction($transaction_id);
                    
                    Log::info('Flutterwave Verify Response', [
                        'verification_data' => $data,
                        'transaction_id' => $transaction_id
                    ]);

                    // Check if verification was successful
                    if (is_array($data) && isset($data['status']) && $data['status'] === 'success') {
                        
                        // Additional verification checks
                        $transactionData = $data['data'] ?? [];
                        
                        // Verify amount matches
                        if (isset($transactionData['amount']) && $sessionAmount) {
                            $paidAmount = floatval($transactionData['amount']);
                            $expectedAmount = floatval($sessionAmount);
                            
                            if (abs($paidAmount - $expectedAmount) > 0.01) {
                                Log::error('Amount mismatch in verification', [
                                    'expected' => $expectedAmount,
                                    'paid' => $paidAmount
                                ]);
                                
                                return redirect(route('order.review'))
                                    ->withErrors(__('Payment amount verification failed.'));
                            }
                        }

                        // Clear session data
                        session()->forget(['tx_ref', 'payment_amount']);

                        $payment_status = 'yes';

                        Log::info('Payment Verified Successfully, Processing Order', [
                            'tx_ref' => $txn_id,
                            'order_id' => session()->get('order_id')
                        ]);

                        $checkout = new PlaceOrderController;
                        return $checkout->placeorder(
                            $txn_id,
                            'Rave',
                            session()->get('order_id'),
                            $payment_status
                        );
                    } else {
                        Log::warning('Payment verification failed', [
                            'verification_status' => $data['status'] ?? 'unknown',
                            'verification_data' => $data
                        ]);
                    }
                    
                } catch (\Exception $verifyException) {
                    Log::error('Payment verification exception', [
                        'message' => $verifyException->getMessage(),
                        'transaction_id' => $transaction_id
                    ]);
                }
            }

            // ❌ Payment failed - Record and redirect
            try {
                $failedTranscations = new FailedTranscations();
                $failedTranscations->txn_id = $txn_id ?? ('RAVE_FAILED_' . Str::uuid());
                $failedTranscations->user_id = auth()->id();
                $failedTranscations->save();
            } catch (\Exception $dbException) {
                Log::error('Failed to save failed transaction', ['error' => $dbException->getMessage()]);
            }

            // Clear session data on failure
            session()->forget(['tx_ref', 'payment_amount']);

            Log::warning('Flutterwave Payment Failed', [
                'status' => $status,
                'tx_ref' => $txn_id,
                'transaction_id' => $transaction_id
            ]);

            return redirect(route('order.review'))
                ->withErrors(__('Payment failed or was cancelled. Please try again.'))
                ->withInput();

        } catch (\Exception $e) {
            Log::error('Flutterwave Callback Exception', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            try {
                $failedTranscations = new FailedTranscations();
                $failedTranscations->txn_id = 'RAVE_CALLBACK_ERROR_' . Str::uuid();
                $failedTranscations->user_id = auth()->id();
                $failedTranscations->save();
            } catch (\Exception $dbException) {
                Log::error('Failed to save failed transaction', ['error' => $dbException->getMessage()]);
            }

            // Clear session data on error
            session()->forget(['tx_ref', 'payment_amount']);

            return redirect(route('order.review'))
                ->withErrors(__('An error occurred during payment verification. Please contact support if money was deducted.'));
        }
    }
}