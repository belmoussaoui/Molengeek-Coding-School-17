<?php

namespace App\Http\Controllers;

use App\Models\HeroItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroItems = HeroItem::paginate(3);
        return view('backoffice.hero.item.all', compact('heroItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.hero.item.create');
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
            'image' => 'required',
        ]);

        $heroItem = new HeroItem();
        
        Storage::disk('public')->delete('img/' . $heroItem->image);
        $heroItem->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img', 'public');

        $heroItem->hero_id = 1;
        $heroItem->created_at = now();
        $heroItem->save();
        return redirect()->route('hero-items.index')->with('message', 'The Hero item has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroItem  $heroItem
     * @return \Illuminate\Http\Response
     */
    public function show(HeroItem $heroItem)
    {
        return view('backoffice.hero.item.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroItem  $heroItem
     * @return \Illuminate\Http\Response
     */
    public function edit(HeroItem $heroItem)
    {
        return view('backoffice.hero.item.edit', compact('heroItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeroItem  $heroItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeroItem $heroItem)
    {
        $request->validate([
            'image' => 'required',
        ]);
        
        Storage::disk('public')->delete('img/' . $heroItem->image);
        $heroItem->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img', 'public');

        $heroItem->updated_at = now();
        $heroItem->save();
        return redirect()->route('hero-items.index')->with('message', 'The Hero item has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroItem  $heroItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroItem $heroItem)
    {
        Storage::disk('public')->delete('img/' . $heroItem->image);
        $heroItem->delete();
        return redirect()->back()->with('message', 'The Hero item has been deleted.');
    }
}
