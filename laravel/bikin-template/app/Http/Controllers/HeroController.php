<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::first();
        return view('backoffice.hero.all', compact('hero'));
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
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view('backoffice.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'button' => 'required',
        ]);
        $section = $hero->section;
        $section->title = $request->title;
        $section->text = $request->text;
        $section->save();
        $section->updated_at = now();
        
        $hero->button = $request->button;
        
        if ($request->image) {
            if ($hero->image !== 'hero-img.png') {
                Storage::disk('public')->delete('img/' . $hero->image);
            }
            $hero->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img', 'public');
            
        }
        $hero->save();
        $hero->updated_at = now();


        return redirect()->route('hero.index')->with('message', 'Hero Section has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
