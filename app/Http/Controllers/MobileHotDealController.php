<?php

namespace App\Http\Controllers;

use App\MobileHotDeal;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MobileHotDealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hotdeal'] = MobileHotDeal::first();
        return view('admin.mobile_hotdeal.setting',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobile_hotdeal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check if the ID exists in the request
        if (!$request->has('id') || !MobileHotDeal::find($request->id)) {
            return back()->with('error', __('Record not found or invalid ID.'));
        }
    
        $img = '';
        if ($file = $request->file('image')) {
            $optimizePath = public_path() . '/images/mobile_hotdeal/';
    
            // Create the directory if it doesn't exist
            if (!file_exists($optimizePath)) {
                mkdir($optimizePath, 0777, true);
            }
    
            $optimizeImage = Image::make($file);
            $image = time() . $file->getClientOriginalName();
            $optimizeImage->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            });
            $optimizeImage->save($optimizePath . $image, 72);
    
            $img = $image;
    
            // Optionally delete the old image if updating
            $existing = MobileHotDeal::find($request->id);
            if ($existing && file_exists(public_path('images/mobile_hotdeal/' . $existing->image))) {
                unlink(public_path('images/mobile_hotdeal/' . $existing->image));
            }
        }
    
        // Update the database
        $params['image'] = $img;
        $updated = MobileHotDeal::whereId($request->id)->update($params);
    
        if ($updated) {
            return back()->with('success', __('Update successfully'));
        } else {
            return back()->with('error', __('Failed to update.'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileHotDeal  $mobileHotDeal
     * @return \Illuminate\Http\Response
     */
    public function show(MobileHotDeal $mobileHotDeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileHotDeal  $mobileHotDeal
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileHotDeal $mobileHotDeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileHotDeal  $mobileHotDeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileHotDeal $mobileHotDeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileHotDeal  $mobileHotDeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileHotDeal $mobileHotDeal)
    {
        //
    }
}
