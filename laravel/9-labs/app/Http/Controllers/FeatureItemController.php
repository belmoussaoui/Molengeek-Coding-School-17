<?php

namespace App\Http\Controllers;

use App\Models\FeatureItem;
use Illuminate\Http\Request;

class FeatureItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featureItems = FeatureItem::paginate(3);
        return view('backoffice.feature.item.all', compact('featureItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.feature.item.create');
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

        $featureItem = new FeatureItem();
        
        $featureItem->feature_id = 1;
        $featureItem->name = $request->name;
        $featureItem->icon = $request->icon;
        $featureItem->text = $request->text;
        
        $featureItem->created_at = now();
        $featureItem->save();
        return redirect()->route('feature-items.index')->with('message', 'The Feature item has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureItem  $featureItem
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureItem $featureItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureItem  $featureItem
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureItem $featureItem)
    {
        return view('backoffice.feature.item.edit', compact('featureItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeatureItem  $featureItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeatureItem $featureItem)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
            'text' => 'required',
        ]);
        
        $featureItem->name = $request->name;
        $featureItem->icon = $request->icon;
        $featureItem->text = $request->text;
        
        $featureItem->updated_at = now();
        $featureItem->save();
        return redirect()->route('feature-items.index')->with('message', 'The Service item has been created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureItem  $featureItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureItem $featureItem)
    {
        $featureItem->delete();
        return redirect()->back()->with('message', 'The Service item has been deleted.');
    }
}
