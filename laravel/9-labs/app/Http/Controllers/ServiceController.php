<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function edit($id) {
        $service = Service::find($id);
        return view('backoffice.service.edit', compact('service'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'button' => 'required',
            'button_href' => 'required',
        ]);
        
        $service = Service::find($id);

        $service->title = $request->title;
        $service->button = $request->button;
        $service->button_href = $request->button_href;

        $service->updated_at = now();
        $service->save();
        return redirect('/#services');//->with('message', 'The Service section has been updated.');
    }
}
