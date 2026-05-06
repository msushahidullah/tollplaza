<?php
namespace App\Http\Controllers;

use App\FailedTranscations;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use Redirect;
use Session;
use URL;
use Illuminate\Support\Str;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{


    public function payWithpaypal($order_id,$amount,$name,$email,$phone,$purpose,$error)
    {

        $payout = round($amount, 2);

        session()->put('error_url', $error);
        session()->put('order_id', $order_id);
        session()->save();
        
        $setcurrency = session('currency')['id'];
        
        if ($setcurrency === 'INR' && env('PAYPAL_MODE') === 'sandbox') {
            return redirect(route('order.review'))->with('error', __('INR is not supported in PayPal sandbox mode. Please try with another currency.'));
        }
        
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => url('status'),
                "cancel_url" => route('order.review'),
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => $setcurrency,
                        "value" => $payout, // Use the dynamic payout value
                    ],
                ],
            ],
        ]);
        
        if (isset($response['id']) && !empty($response['id'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
            return redirect()->back()->with('error', __('Unable to find approval link.')); // Improved error message
        } else {
            return redirect()
                ->back()
                ->with('error', $response['message'] ?? __('An unexpected error occurred while creating the PayPal order.'));
        }
        


      

        try
        {
           
            $payment->create($this->_api_context);
           

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {

                
                session()->flash('error', __('Connection timeout !'));

                $failedTranscations = new FailedTranscations;
                $failedTranscations->order_id = $order_id;
                $failedTranscations->txn_id = 'PAYPAL_FAILED_' . Str::uuid();
                $failedTranscations->user_id = Auth::user()->id;
                $failedTranscations->save();
                return redirect($error);

            } else {

                
                session()->flash('error', __('Some error occur, Sorry for inconvenient'));

                $failedTranscations = new FailedTranscations;
                $failedTranscations->order_id = $order_id;
                $failedTranscations->txn_id = 'PAYPAL_FAILED_' . Str::uuid();
                $failedTranscations->user_id = Auth::user()->id;
                $failedTranscations->save();

                return redirect($error);
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

       
        session()->flash('error', __(' Unknown error occurred !'));

        return redirect($error);
    }

    public function getPaymentStatus(Request $request)
    {

        $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $response = $provider->capturePaymentOrder($request->token);

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');

        if (empty($request->get('PayerID')) || empty($request->get('token'))) {

            
            session()->flash('error', __('Payment failed !'));

            $failedTranscations = new FailedTranscations;
            $failedTranscations->order_id = session()->get('order_id');
            $failedTranscations->txn_id = 'PAYPAL_FAILED_' . Str::uuid();
            $failedTranscations->user_id = Auth::user()->id;
            $failedTranscations->save();

            return redirect(session()->get('error_url'));
        }

      

        // $payment = Payment::get($payment_id, $this->_api_context);
        // $execution = new PaymentExecution();
        // $execution->setPayerId($request->get('PayerID'));
        // /**Execute the payment **/
        // $response = $payment->execute($execution, $this->_api_context);
        $order_id = session()->get('order_id');

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // return $response;

            // $transactions = $payment->getTransactions();
            // $relatedResources = $transactions[0]->getRelatedResources();
            // $sale = $relatedResources[0]->getSale();
            $saleId = $response['id'];
            $payment_status = 'yes';
            

            if(Session::get('payment_type') == 'order')
            {
                Session::forget('payment_type');
                Session::forget('error_url');
                Session::forget('order_id');
                
                $payment_status = 'yes';
                $checkout = new PlaceOrderController;
                return $checkout->placeorder($payment_id,'Paypal',$order_id,$payment_status,$saleId);

            }else{
                
                Session::forget('payment_type');
                $preorder = new PreorderController;
                return $preorder->completePreorder($invoice = session()->get('inv_preorder'),$txn_id = $payment_id);

            }

            
            /*End*/

        } else {
            
            session()->flash('error', __('Payment Failed !'));

            $failedTranscations = new FailedTranscations;
            $failedTranscations->order_id = $order_id;
            $failedTranscations->txn_id = 'PAYPAL_FAILED_' . Str::uuid();
            $failedTranscations->user_id = Auth::user()->id;
            $failedTranscations->save();
            return redirect(session()->get('error_url'));
        }

    }

}
