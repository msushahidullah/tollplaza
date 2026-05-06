<?php
namespace App\Http\Controllers;

use App\User;

use App\Services\BraintreeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BrainTreeController extends Controller
{

    
    protected $braintree;

    public function __construct(BraintreeService $braintree)
    {
        $this->braintree = $braintree;
    }

    /**
     * Generate Client Token
     */
    public function accessToken()
    {
        $clientToken = $this->braintree->getGateway()->clientToken()->generate();
        return response()->json(['client' => $clientToken]);
    }

    public function process(Request $request)
    {
        require 'price.php';
        $gateway = $this->braintree->getGateway();

        $cart_table = Auth::user()->cart;
        $total = 0;
        
        $total = getcarttotal();
       
        $total = sprintf("%.2f",$total*$conversion_rate);

        if (round($request->actualtotal, 2) != $total) {

            
            return redirect(route('order.review'));

        }

        $response = $gateway->transaction()->sale([
            'amount' => Crypt::decrypt($request->amount),
            'paymentMethodNonce' => $request->payment_method_nonce,
            'options' => [
                'submitForSettlement' => true,
            ],
        ]);

        require_once 'price.php';
// return $response->success;
        /** Checking If Payment is successfull or not */
        if ($response->success) {
            // return "hhhh";
            $txn_id = $response->transaction->id;
            $payment_status = 'yes';

            $checkout = new PlaceOrderController;

            return $checkout->placeorder($txn_id, 'Braintree', session()->get('order_id'), $payment_status);
        } else {
            
            return redirect(route('order.review'));
        }
    }

    public function createCustomer()
    {

        if (!Auth::user()->braintree_id) {

            $gateway = $this->brainConfig();

            $result = $gateway->customer()->create([
                'firstName' => Auth::user()->name,
                'email' => Auth::user()->email,
            ]);

            if ($result->success) {
                User::where('id', Auth::user()->id)->update(['braintree_id' => $result->customer->id]);
                return $result->customer->id;
            }

        } else {
            return Auth::user()->braintree_id;
        }

    }

    /* Config function to get the braintree config data to process all the apis on braintree gateway */
    public function brainConfig()
    {

        return $gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY'),
        ]);

    }

}
