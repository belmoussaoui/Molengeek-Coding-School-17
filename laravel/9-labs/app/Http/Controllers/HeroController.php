<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function edit($id) {
        $hero = Hero::find($id);
        return view('backoffice.hero.edit', compact('hero'));
    }

    public function update($id, Request $request) {
        $hero = Hero::find($id);
        $request->validate([
            'subtitle' => 'required',
        ]);

        $hero->subtitle = $request->subtitle;


        if ($request->file('logo')) {
            Storage::disk('public')->delete('img/' . $hero->logo);
            $hero->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly('img', 'public');
        }

        $hero->updated_at = now();
        $hero->save();
        return redirect('/#hero')->with('message', 'The Hero section has been updated.');
    }
}
