<?php
namespace App\Http\Controllers;

use App\FailedTranscations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Instamojo\Instamojo;
class InstamojoController extends Controller
{

    protected $apiKey;
    protected $authToken;
    protected $url;
    public function __construct()
    {
        $this->middleware('auth');
       $this->apiKey = env('IM_API_KEY');
        $this->authToken = env('IM_AUTH_TOKEN');
        $this->url = env('IM_URL');
    }

    public function payment($order_id, $amount, $name, $email, $phone, $purpose, $error)
    {   
        if ($phone < 10) {
            notify()->error(__("Invalid Phone no ! "));
            return redirect($error);
        }

        session()->put('error_url', $error);
        session()->save();

        // Instantiate Instamojo API
        // $api = new Instamojo(config('services.instamojo.api_key'), config('services.instamojo.auth_token'), config('services.instamojo.url'));
        $api = new Instamojo($this->apiKey, $this->authToken, $this->url);

        try
        {
            // $response = $api->paymentRequestCreate(array(
            //     "purpose"       => $purpose,
            //     "amount"        => $amount,
            //     "buyer_name"    => $name,
            //     "send_email"    => true,
            //     "send_sms"      => true,
            //     "email"         => $email,
            //     "phone"         => $phone,
            //     "redirect_url"  => url('/paidsuccess'),
            // ));



            $response = $api->paymentRequestCreate([
                "purpose" => $purpose,
                "amount" => $amount,
                "send_email" => true,
                "email" => $email,
                "redirect_url" => url('/paidsuccess'), // Redirect URL after payment success
                // "webhook_url" => route('payment.webhook')   // Webhook URL for Instamojo to send updates
            ]);


            return redirect($response['payment_request']['longurl']);

            // $response = $this->api->paymentRequestCreate([
            //     "purpose"       => $purpose,
            //     "amount"        => $amount,
            //     "buyer_name"    => $name,
            //     "send_email"    => true,
            //     "send_sms"      => true,
            //     "email"         => $email,
            //     "phone"         => $phone,
            //     "redirect_url"  => url('/paidsuccess'),
            // ]);

            // // Redirect user to the payment page
            // return redirect($response['payment_request']['longurl']);

        } catch (\Exception $e) {
            notify()->error(__("Payment Failed!"), $e->getMessage());
            $failedTranscations = new FailedTranscations;
            $failedTranscations->order_id = $order_id;
            $failedTranscations->txn_id = 'INSTAMOJO_FAILED_' . str_random(5);
            $failedTranscations->user_id = auth()->id();
            $failedTranscations->save();
            return redirect($error);
        }
    }

    public function success(Request $request)
    {

        try
        {

            $api = new \Instamojo\Instamojo(config('services.instamojo.api_key'), config('services.instamojo.auth_token'), config('services.instamojo.url'));

            $response = $api->paymentRequestStatus(request('payment_request_id'));

            if (!isset($response['payments'][0]['status'])) {

                notify()->error(__('Payment Failed !'));
                return redirect(session()->get('error_url'));
                

            } else if ($response['payments'][0]['status'] != 'Credit') {

                notify()->error(__('Payment Failed !'));
                return redirect(session()->get('error_url'));

            } else {

               
                $txn_id = $response['payments'][0]['payment_id'];

                $payment_method = 'Instamojo';

                $order_id = session()->get('order_id');

                if(Session::get('payment_type') == 'order')
                {
                    Session::forget('payment_type');
                    Session::forget('error_url');
                    Session::forget('order_id');
                    
                    $payment_status = 'yes';
                    $checkout = new PlaceOrderController;
                    return $checkout->placeorder($txn_id,$payment_method,$order_id,$payment_status);

                }else{
                    
                    Session::forget('payment_type');
                    $preorder = new PreorderController;
                    return $preorder->completePreorder($invoice = session()->get('inv_preorder'),$txn_id);

                }

            }
        } catch (\Exception $e) {

            notify()->error($e->getMessage());
            $failedTranscations = new FailedTranscations;
            $failedTranscations->txn_id = 'INSTAMOJO_FAILED_' . Str::uuid();
            $failedTranscations->user_id = auth()->id();
            $failedTranscations->save();

            return redirect(session()->get('error_url'));
            

        }

    }

    #endoflast

}
