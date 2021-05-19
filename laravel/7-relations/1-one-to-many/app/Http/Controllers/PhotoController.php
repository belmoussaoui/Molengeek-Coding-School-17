<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Photo::all();
        return view('backoffice.photo.all', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.photo.create');
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
            'nom' => 'required',
            'lien' => 'required',
            'categorie' => 'required',
            'description' => 'required',
        ]);
        $photo = new Photo();
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();
        $photo->save();
        return redirect()->route('photos.index')->with('message', 'Vous avez créer une photo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('backoffice.photo.read', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('backoffice.album.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'nom' => 'required',
            'lien' => 'required',
            'categorie' => 'required',
            'description' => 'required',
        ]);
        $photo->nom = $request->nom;
        $photo->lien = $request->lien;
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->updated_at = now();
        $photo->save();
        return redirect()->route('photos.index')->with('message', 'Vous avez modifié une photo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé une photo.');
    }
}
