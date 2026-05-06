<?php

namespace App\Http\Controllers\Api\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genral;

class HomeController extends Controller
{
    public function __construct()
    {
        try {

            $this->sellerSystem = Genral::select('vendor_enable')->first();

        } catch (\Exception $e) {

        }
    }

    /**
     * Display a listing of the resource.
     */

     public function homepage(Request $request)  {
        
        $validator = Validator::make($request->all(), [
            'secret' => 'required|string',
            'currency' => 'required|max:3|min:3',
        ]);

        if ($validator->fails()) {

            $errors = $validator->errors();

            if ($errors->first('secret')) {
                return response()->json(['msg' => $errors->first('secret'), 'status' => 'fail']);
            }

            if ($errors->first('currency')) {
                return response()->json(['msg' => $errors->first('currency'), 'status' => 'fail']);
            }
        }

        $key = DB::table('api_keys')->where('secret_key', '=', $request->secret)->first();

        if (!$key) {
            return response()->json(['msg' => 'Invalid Secret Key !', 'status' => 'fail']);
        }

        $rates = new CurrencyController;

        $this->rate = $rates->fetchRates($request->currency)->getData();
     }


     
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
