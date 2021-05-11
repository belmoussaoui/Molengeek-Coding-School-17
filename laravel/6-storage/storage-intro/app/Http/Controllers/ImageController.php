<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('backoffice.image.all', compact('images'));
    }
    
    public function delete($id) {
        $image = Image::find($id);
        Storage::disk('public')->delete('img/' . $image->path);
        $image->delete();
        return redirect()->back();

    }
    
    public function edit($id) {
        $image = Image::find($id);
        return view('backoffice.image.edit', compact('image'));
    }
    
    public function update($id, Request $request) {
        $image = Image::find($id);
        $image->nom = $request->nom;
        Storage::disk('public')->delete('img/' . $image->path);
        $image->path = $request->file('path')->hashName();
        $image->description = $request->description;
        $image->updated_at = now();
        $image->save();
        $request->file('path')->storePublicly('img', 'public');
        return redirect()->route('image');
    }
    
    public function create() {
        return view('backoffice.image.create');
    }
    
    public function store(Request $request) {
        
        $request->validate([
            'nom' => 'required',
            'path' => 'required|max:255',
            'description' => 'required',
        ]);
        $image = new Image();
        $image->nom = $request->nom;
        $image->path = $request->file('path')->hashName();
        $image->description = $request->description;
        $image->created_at = now();
        $image->save();
        $request->file('path')->storePublicly('img', 'public');
        
        return redirect()->route('image');
    }
}
