<?php

namespace App\Http\Controllers;

use App\AddSubVariant;
use App\ProductNotify;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductNotifyController extends Controller
{
    public function post(Request $request,$varid){

        $variant = AddSubVariant::find($varid);

        $checkif = ProductNotify::firstWhere(['email' => $request->email,'var_id' => $varid]);

        $user = User::firstWhere('email',$request->email);

        if($checkif){
            session()->flash('info', 'You already subscribed for this product !');
            return back();
        }

        if($variant){
            ProductNotify::create([
                'email' => $request->email,
                'var_id' => $varid,
                'user_id' => isset($user) ? $user->id : NULL
            ]);
        }
        session()->flash('success', 'Added to Notify List !');
        return back();

    }
}
