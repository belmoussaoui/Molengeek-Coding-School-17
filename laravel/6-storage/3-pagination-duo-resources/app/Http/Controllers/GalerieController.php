<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $galeries= Galerie::paginate(2);
        return view("backoffice.galerie.all",compact("galeries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.galerie.create');
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
            "nom"=>"required",
            "image"=>"required",
            "description"=>"required"
        ]);
        $galerie= new Galerie();
        $galerie->nom = $request->nom;
        $galerie->description = $request->description;
        $galerie->image = $request->file('image')->hashName();
        $galerie->updated_at = now();
        $galerie->save();
        $request->file('image')->storePublicly('img','public');
        return redirect()->route('galeries.index')->with('message','Vous avez bien créée une nouvelle galerie :'." " . $galerie->nom);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    // public function show(Galerie $galerie)
    // {
    //     return view("backoffice.galerie.read",compact('galerie'));
    // }
    public function show($id)
    {
        $galerie= Galerie::find($id);
        return view("backoffice.galerie.read",compact("galerie"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    // public function edit(Galerie $galerie)
    // {
    //     return view('backoffice.galerie.edit',compact("galerie"));
        
    // }
    public function edit ($id)
    {
        $galerie= Galerie::find($id);
        return view("backoffice.galerie.edit",compact("galerie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "description"=>"required"
        ]);
        $galerie->nom = $request->nom;
        $galerie->description = $request->description;
        Storage::disk("public")->delete('img/' . $galerie->image);
        $galerie->image = $request->file('image')->hashName();
        $galerie->updated_at = now();
        $galerie->save();

        $request->file('image')->storePublicly('img','public');
        return redirect()->route('galeries.index')->with('message','Vous avez bien modifié la galerie :'." " . $galerie->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Galerie $galerie)
    // {
    //     Storage::disk('public')->delete('img/'.$galerie->image);
    //     $galerie->delete();
    //     return redirect()->back();
    // }
    public function destroy($id)
    {
        $galerie = Galerie::find($id);
        Storage::disk('public')->delete('img/'.$galerie->image);
        $galerie->delete();
        return redirect()->back();
    }
    public function download($id){
        $galerie = Galerie::find($id);
        return Storage::disk('public')->download('img/'.$galerie->image);
    }
}
