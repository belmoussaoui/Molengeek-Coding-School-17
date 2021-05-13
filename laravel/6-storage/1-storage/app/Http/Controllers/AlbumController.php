<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::all();
        return view('backoffice.album.all', compact('albums'));
    }
     
    public function destroy($id) {
        $album = Album::find($id);
        $album->delete();
        return redirect()->back();
    }
    
    public function create() {
        return view('backoffice.album.create');
    }
    
    public function store(Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'description' => 'required|max:255',
	    ]);
        $album = new Album();
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->created_at = now();
        $album->save();
        return redirect()->route('albums')->with('message', 'The success message!');;
    }
    
    public function edit($id) {
        $album = Album::find($id);
        return view('backoffice.album.edit', compact('album'));
    }
    
    public function show($id) {
        $album = Album::find($id);
        return view('backoffice.album.show', compact('album'));
    }
    
    public function update($id, Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'description' => 'required|max:255',
	    ]);
        $album = Album::find($id);
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->updated_at = now();
        $album->save();
        return redirect()->route('albums')->with('message', 'The success message!');
    }
}
