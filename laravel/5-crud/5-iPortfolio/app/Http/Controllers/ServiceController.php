<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('backoffice.service.all', compact('services'));
    }

    public function delete($id) {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
    
    public function edit($id) {
        $service = Service::find($id);
        return view('backoffice.service.edit', compact('service'));
    }
    
    public function update($id, Request $request) {
        $service = Service::find($id);
        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->updated_at = now();
        $service->save();
        return redirect()->route('service');
    }
    
    public function create() {
        return view('backoffice.service.create');
    }
    
    public function store(Request $request) {
        $service = new Service();
        $service->logo = $request->logo;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->created_at = now();
        $service->save();
        return redirect()->route('service');
    }
}
