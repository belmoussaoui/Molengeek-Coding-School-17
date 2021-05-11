<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('backoffice.photo.all', compact('photos'));
    }

    public function destroy($id) {
        $photo = Photo::find($id);
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
        $photo->lien = $request->file('lien')->hashName();;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();
        $photo->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photos')->with('message', 'The success message!');
    }

    public function download($id) {
        $photo = Photo::find($id);
        $filepath = public_path('img/') . $photo->lien;
        return response()->download($filepath);
    }

}
