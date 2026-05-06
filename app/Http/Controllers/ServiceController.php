<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view("admin.services.index", compact("services"));
    }
    public function create()
    {
        abort_if(!auth()->user()->can('brand.create'),403,__('User does not have the right permissions.'));
        return view("admin.services.add");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        $input['status'] = isset($request->status)  ? 1 : 0;
        $data = Service::create($input);
        $data->save();
    return  redirect()->route('services.index')->with('added', __('Service created successfully'));

    }

    public function edit($id)
    {
        abort_if(!auth()->user()->can('brand.edit'),403,__('User does not have the right permissions.'));
        $service = Service::findOrFail($id);
        return view("admin.services.edit", compact("service"));
    }
    public function update(Request $request,$id)
    {
        
        $data = Service::findOrFail($id);
        $data['name'] = strip_tags($request->name);
        $data['status'] = isset($request->status)  ? 1 : 0;
        $data->save();
        return  redirect()->route('services.index')->with('updated', __('Service has been updated'));
      
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }
}
