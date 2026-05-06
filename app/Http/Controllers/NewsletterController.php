<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;


class NewsletterController extends Controller
{
    public function store(Request $request)
    {

        if (env('MAILCHIMP_APIKEY') != '')
        {
           try{
                if (!Newsletter::isSubscribed($request->email))
                {
                    Newsletter::subscribe($request->email);
                   
                    return back()->with('success', __('Thanks For Subscribe !'));
                }
                else
                {
                
                    return back()->with('error', __('You are already in our subscription list !'));
                }
           }catch(\Exception $e){
            
                session()->flash('error', $e->getMessage());

                return back();
           }
        }
        else
        {
            
            session()->flash('error', __('Mailchimp API keys not updated !'));

            return back();
        }

    }
}

