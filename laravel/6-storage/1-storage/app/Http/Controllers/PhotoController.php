<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('backoffice.photo.all', compact('photos'));
    }

    public function destroy($id) {
        $photo = Photo::find($id);
        Storage::disk('public')->delete('img/' . $photo->lien);
        $photo->delete();
        return redirect()->back();
    }

    public function create() {
        return view('backoffice.photo.create');
    }
    
    public function store(Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'lien' => 'required|max:255',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
        $photo = new Photo();
        $photo->nom = $request->nom;
        $photo->lien = $request->file('lien')->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();
        $photo->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photos')->with('message', 'Vous avez bien créer la photo' . $photo->nom);
    }

    public function download($id) {
        $photo = Photo::find($id);
        $filepath = public_path('img/') . $photo->lien;
        return response()->download($filepath);
    }

    public function edit($id) {
        $photo = Photo::find($id);
        return view('backoffice.photo.edit', compact('photo'));
    }
    
    public function show($id) {
        $photo = Photo::find($id);
        return view('backoffice.photo.show', compact('photo'));
    }
    
    public function update($id, Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'lien' => 'required|max:255',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
        $photo = Photo::find($id);
        $photo->nom = $request->nom;
        Storage::disk('public')->delete('img/'  .  $photo->lien);
        $photo->lien = $request->file('lien')->hashName();;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->updated_at = now();
        $photo->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photos')->with('message', 'Vous avez bien modifié la photo ' . $photo->nom);
    }

}
