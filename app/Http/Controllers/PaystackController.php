<?php

namespace App\Http\Controllers;

use App\FailedTranscations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;
use Notify;
use DB;
use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Crypt;
class PaystackController extends Controller
{
    public function pay(Request $request){
       

        if (Session::get('currency')['id'] != 'NGN') {
           
            
            return redirect(route('order.review'))->with('error','Paystack only support NGN currency.');
        }
        if(env('PAYSTACK_PUBLIC_KEY') == '' || env('PAYSTACK_SECRET_KEY') == '' || env('PAYSTACK_CALLBACK_URL') == ''){
           
            return redirect(route('order.review'))->with('error', "Paystack Key Not Found Please Contact your Site Admin");
        }
        // return $request->all();
        // $payout = round($request->amount, 2);
        $decryptedAmount = Crypt::decrypt($request->amount);
        /** If Payment is valid than redirect to thier Paystack Payment Page */
        try{


            // Session::put('plan_id', $request->input('plan_id'));
            // Session::put('plan_amount', $request->input('plan_amount'));
            // Session::put('coupon_id',$request->input('coupon_id'));
            $auth = Auth::user();
            $data = [
                'order' => rand(1, 100),
                'user' => $auth->id,
                'mobile_number' => $auth->mobile ?? '',
                'email' => $auth->email,
                'amount' => (int) ((float) $decryptedAmount * 100),
                'reference' => uniqid(),
                'currency' => $request->currency,
                'callback_url' => route('paystack.callback')
            ];
            $paystack = new \Unicodeveloper\Paystack\Paystack();
        return $paystack->getAuthorizationUrl($data)->redirectNow();




            // return Paystack::getAuthorizationUrl()->redirectNow();
            // return Paystack::getAuthorizationUrl()->redirectNow();
            
        }catch(\Exception $e){

            return redirect(route('order.review'))->with('error', $e->getMessage());
        }
    }

    public function callback(){



        try {
            $paystack = new \Unicodeveloper\Paystack\Paystack();
            $paymentDetails = $paystack->getPaymentData();
          
            $paymentDetails = json_decode(json_encode($paymentDetails), true);
            $paymentdata = $paymentDetails['data'];

            if ($paymentDetails['status'] === true) {
                $txn_id = $paymentdata['reference'];
                $payment_method = 'Paystack';
                $payment_status = 'yes';
                $checkout = new PlaceOrderController;

            return $checkout->placeorder($txn_id,'Paystack',session()->get('order_id'),$payment_status);
            }else {


                $failedTranscations = new FailedTranscations();
                $failedTranscations->order_id = session()->get('order_id');
                $failedTranscations->txn_id = $paymentdata['reference'] ?? 'N/A';
                $failedTranscations->user_id = auth()->id();
                $failedTranscations->save();
              
                return redirect(route('order.review'))->with('error', $paymentDetails['data']['message']);

                // Payment failed
                // $txn_id = $paymentdata['reference'] ?? 'N/A';
                // $payment_method = 'Paystack';
                // $checkout = new CheckoutController;
                // return $checkout->create_order($txn_id, $payment_method, $plan_id, $plan_amount,$coupon_id , 'failed');
            }
        } catch (\Exception $ex) {
            Session::flash('delete', $ex->getMessage());
            return redirect('/');
        }






        
        // $paymentDetails = Paystack::getPaymentData();
        

        // if($paymentDetails['data']['status'] == 'success'){

        //     $txn_id = $paymentDetails['data']['id'];
            
        //     $payment_status = 'yes';

        //     $checkout = new PlaceOrderController;

        //     return $checkout->placeorder($txn_id,'Paystack',session()->get('order_id'),$payment_status);

        // }else {
        //     $failedTranscations = new FailedTranscations();
        //     $failedTranscations->order_id = session()->get('order_id');
        //     $failedTranscations->txn_id = 'PAYSTACK_FAILED_' . Str::uuid();
        //     $failedTranscations->user_id = auth()->id();
        //     $failedTranscations->save();
        //     // notify()->error($paymentDetails['data']['message']);
        //     return redirect(route('order.review'))->with('error', $paymentDetails['data']['message']);
        // }

    }
}
