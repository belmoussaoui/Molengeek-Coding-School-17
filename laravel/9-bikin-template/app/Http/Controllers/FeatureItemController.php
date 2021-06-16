<?php

namespace App\Http\Controllers;

use App\Models\FeatureItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureItemController extends Controller
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
            'title' => 'required',
            'description' => 'required',
        ]);

        $featureItem->title = $request->title;
        $featureItem->description = $request->description;
        if ($request->check1) {
            $featureItem->check1 = $request->check1;
        }
        if ($request->check2) {
            $featureItem->check2 = $request->check2;
        }
        if ($request->check3) {
            $featureItem->check3 = $request->check3;
        }
        if ($request->text) {
            $featureItem->text = $request->text;
        }
        if ($request->image) {
            Storage::disk('public')->delete('img/' . $featureItem->image);
            $featureItem->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img', 'public');
            
        }
        $featureItem->save();
        $featureItem->updated_at = now();

        return redirect()->route('features.index')->with('message', 'Features item has been updated');
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
        return redirect()->back()->with('message', 'Feature Item has been deleted');
    }
}
