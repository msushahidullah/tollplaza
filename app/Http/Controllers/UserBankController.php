<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userbank;
use Auth;

class UserBankController extends Controller
{
    public function index()
    {   
        require_once('price.php');
    	return view('user.bankac.bankindex',compact('conversion_rate'));
    }

    public function store(Request $request){

        $request->validate([
            'acname' => 'required',
            'bankname' => 'required',
            'acno'  => 'required|unique:userbanks,acno',
            'ifsc'  => 'required',

        ],[
            'acname.required' => __('Account name is required'),
            'bankname.required' => __('Bank name is required'),
            'acno.required' => __('Account no is required'),
            'acno.unique' => __('Account no is already in our records'),
            'ifsc.required' => __('IFSC Code is required'),

        ]);

    	$newbank = new Userbank;

    	$input = $request->all();
    	$input['user_id'] = Auth::user()->id;
    	$newbank->create($input);
         session()->flash('success', 'Bank Added Successully !');

    	return back();
    }

    public function update(Request $request,$id)
    {   

        $findac = Userbank::findorfail($id); 
        $getallac = Userbank::all();
        $input = $request->all();
        
        foreach ($getallac as $value) {
            
           if($findac->id == $value->id){

                if($request->acno == $findac->acno){
                   
                   $request->validate([
                        'acname' => 'required',
                        'bankname' => 'required',
                        'acno'  => 'required',
                        'ifsc'  => 'required',

                    ],[
                        'acname.required' => __('Account name is required'),
                        'bankname.required' => __('Bank name is required'),
                        'acno.required' => __('Account no is required'),
                        'ifsc.required' => __('IFSC Code is required'),

                    ]);

                   $findac->update($input);
                   
                   session()->flash('success', 'Bank account information updated !');

                   return back();


                }else{
                    
                    try{
                        $request->validate([
                        'acname' => 'required',
                        'bankname' => 'required',
                        'acno'  => 'required',
                        'ifsc'  => 'required',

                    ],[
                        'acname.required' => __('Account name is required'),
                        'bankname.required' => __('Bank name is required'),
                        'acno.required' => __('Account no is required'),
                        'ifsc.required' => __('IFSC Code is required'),

                    ]);

                    $findac->update($input);
                }catch(\Exception $e){
                    
                    session()->flash('error', 'Bank account already exist !');

                    return back();
                }
                    
                    session()->flash('success', 'Bank account updated successully !');

                    return back();

                }
           }

        }

    }
    

    public function delete($id)
    {
         $userbank = Userbank::findorfail($id); 

        if(Auth::user()->id == $userbank->user_id || Auth::user()->role_id == 'a'){
            $userbank->delete();
           
            session()->flash('success', 'Bank deleted successfully !');

            return back();
        }else{
             session()->flash('error', '401 Unauthorized Action !');
            return back();
        } 
    }
}
