<?php

namespace App\Http\Controllers;

use App\Models\ServiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceItems = ServiceItem::paginate(3);
        return view('backoffice.service.item.all', compact('serviceItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backoffice.service.item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'text' => 'required',
        ]);

        $serviceItem = new ServiceItem();
        
        $serviceItem->service_id = 1;
        $serviceItem->name = $request->name;
        $serviceItem->icon = $request->icon;
        $serviceItem->text = $request->text;
        
        $serviceItem->created_at = now();
        $serviceItem->save();
        return redirect()->route('service-items.index')->with('message', 'The Service item has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceItem $serviceItem)
    {
        return view('backoffice.service.item.show');
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
            'name' => 'required',
            'icon' => 'required',
            'text' => 'required',
        ]);
        
        $serviceItem->name = $request->name;
        $serviceItem->icon = $request->icon;
        $serviceItem->text = $request->text;
        
        $serviceItem->updated_at = now();
        $serviceItem->save();
        return redirect()->route('service-items.index')->with('message', 'The Service item has been created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceItem $serviceItem)
    {
        $serviceItem->delete();
        return redirect()->back()->with('message', 'The Service item has been deleted.');
    }
}
