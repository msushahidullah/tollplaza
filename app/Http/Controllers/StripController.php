<?php

namespace App\Http\Controllers;

use App\Address;
use App\FailedTranscations;
use App\Invoice;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use DB;
use App\Models\Packages;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class StripController extends Controller
{

   
    public function stripayment(Request $request)
    {
        require_once 'price.php';
    
        $amount = round(decrypt($request->amount), 2);
    
        // Validate the request
        $validator = Validator::make($request->all(), [
            'paymentMethodId' => 'required',
            'amount' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect(route('order.review'))->withErrors($validator)->withInput();
        }
    
        $conversion_rate = 1; // Ensure this value is defined
        $cart_table = Auth::user()->cart;
        $total = getcarttotal();
    
        $total = sprintf("%.2f", $total * $conversion_rate);
    
        if (round($request->actualtotal, 2) != $total) {
            return redirect(route('order.review'))->with('error', __('Payment amount has been modified.'));
        }
    
        $inv_cus = Invoice::first();
        $order_id = uniqid();
    
        $stripe = Stripe::make(env('STRIPE_SECRET'));
    
        // Check for Stripe configuration
        if (empty($stripe) || empty(env('STRIPE_SECRET'))) {
            \Log::error('Stripe secret key is not set.');
            return redirect()->back()->with('error', __('Stripe key is missing. Please contact the administrator.'));
        }
    
        $auth = Auth::user();
    
        try {
            // Create Stripe customer if not exists
            // if (is_null($auth->stripe_id)) {
            //     $customer = $this->createCustomer($stripe, $auth);
            //     $auth->stripe_id = $customer['id'];
            //     $auth->save();
            // }

            $address = Address::findorfail(session()->get('address'));
            if (auth()->user()->stripe_id != '') {

                $customer = $stripe->customers()->create([
                    'email' => auth()->user()->email,
                    'name' => auth()->user()->name,
                    'address' => [
                        'line1' => $address->address,
                        'postal_code' => $address->pin_code,
                        'city' => $address->getcity->name,
                        'state' => $address->getstate->name,
                        'country' => $address->getCountry->iso
                    ],
                ]);

                auth()->user()->update([
                    'stripe_id' => $customer['id'],
                ]);

            }


    
            // Create a Payment Intent
            $paymentIntent = $stripe->paymentIntents()->create([
                'amount' => (int) ($amount * 100), // Convert amount to cents
                'currency' => session()->get('currency')['id'] ?? 'usd', // Default to 'usd' if currency is not set
                'payment_method' => $request->paymentMethodId, // Payment method ID from the client
                'customer' => $auth->stripe_id, // Stripe customer ID
                'confirm' => true, // Auto-confirm the payment
                'description' => "Payment for Order {$inv_cus->order_prefix} {$order_id}",
            ]);
    
            // Handle payment success
            if ($paymentIntent['status'] === 'succeeded') {
                $txn_id = $paymentIntent['charges']['data'][0]['id'];
                $checkout = new PlaceOrderController();
                return $checkout->placeorder($txn_id, 'Stripe', $order_id, 'yes');
            }
    
            // Handle cases requiring additional actions (e.g., 3D Secure)
            if ($paymentIntent['status'] === 'requires_action') {
                return redirect($paymentIntent['next_action']['redirect_to_url']['url'], 301);
            }
    
            // Other payment statuses
            return redirect(route('order.review'))->with('error', __('Payment failed. Please try again.'));
        } catch (\Stripe\Exception\CardException $e) {
            // Handle card errors (e.g., declined card)
            FailedTranscations::create([
                'txn_id' => 'STRIPE_FAILED_' . Str::random(5),
                'user_id' => auth()->id(),
                'error' => $e->getMessage(),
            ]);
    
            return redirect(route('order.review'))->with('deleted', __('Card declined: ') . $e->getMessage());
        } catch (\Exception $e) {
            // Handle general exceptions
            FailedTranscations::create([
                'txn_id' => 'STRIPE_FAILED_' . Str::random(5),
                'user_id' => auth()->id(),
                'error' => $e->getMessage(),
            ]);
    
            return redirect(route('order.review'))->with('error', __('An error occurred: ') . $e->getMessage());
        }
    }
    
    public function complete3ds(Request $request)
    {

        $stripe = Stripe::make(env('STRIPE_SECRET'));

        $result = $stripe->paymentIntents()->find($request->payment_intent);

        if ($result['status'] === 'succeeded') {

            $txn_id = $result['charges']['data'][0]['id'];

            $order_id = uniqid();

            $payment_status = 'yes';

            $checkout = new PlaceOrderController;

            return $checkout->placeorder($txn_id, 'Stripe', $order_id, $payment_status);

        } else {
            $error = $result['last_payment_error']['message'];
          
            session()->flash('error', $e->getMessage());
            $failedTranscations = new FailedTranscations;
            $failedTranscations->txn_id = $result['id'];
            $failedTranscations->user_id = auth()->id();
            $failedTranscations->save();

            return redirect(route('order.review'));

        }

    }

}
