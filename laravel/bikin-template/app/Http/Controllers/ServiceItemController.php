<?php

namespace App\Http\Controllers;

use App\Models\ServiceItem;
use Illuminate\Http\Request;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceItem $serviceItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceItem $serviceItem)
    {
        return view('backoffice.service.item.edit', compact('serviceItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceItem $serviceItem)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $serviceItem->title = $request->title;
        $serviceItem->description = $request->description;
        $serviceItem->icon = $request->icon;
        $serviceItem->save();
        $serviceItem->updated_at = now();

        return redirect()->route('services.index')->with('message', 'Services item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceItem $serviceItem)
    {
        //
    }
}
