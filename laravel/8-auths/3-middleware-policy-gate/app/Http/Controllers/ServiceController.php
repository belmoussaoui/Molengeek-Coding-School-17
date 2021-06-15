<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(5);
        $navbar = true;
        return view('backoffice.service.all', compact('services', 'navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Service::class);
        return view('backoffice.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Service::class);

        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $service = new Service();

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->created_at = now();
        
        $service->save();

        return redirect()->route('service.index', compact('service'))->with("message", "$service->title a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backoffice.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('update', $service);
        return view('backoffice.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('update', $service);
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);


        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->updated_at = now();
        
        $service->save();

        return redirect()->route('service.index', compact('service'))->with("message", "$service->title a bien été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->back();
    }
}
