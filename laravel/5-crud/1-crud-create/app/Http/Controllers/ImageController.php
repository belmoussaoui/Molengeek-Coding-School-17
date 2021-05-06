<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('backoffice.image.all', compact('images'));
    }

    public function delete($id) {
        $image = Image::find($id);
        $image->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $image = Image::find($id);
        return view('backoffice.image.edit', compact('image'));
    }

    public function update($id, Request $request) {
        $image = Image::find($id);
        $image->nom = $request->lien ;
        $image->adresse = $request->adresse ;
        $image->updated_at = now();
        
        $image->save();
        return redirect()->route('image');
    }

    public function create() {
        return view('backoffice.image.create');
    }

    public function store(Request $request) {
        $image = new Image();
        $image->nom = $request->lien ;
        $image->adresse = $request->adresse ;
        $image->created_at = now();
        
        $image->save();
        return redirect()->route('image');
    }

    
}
