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
        $album = new Album();
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->created_at = now();
        $album->save();
        return redirect()->route('albums')->with('message', 'The success message!');;
    }
}
