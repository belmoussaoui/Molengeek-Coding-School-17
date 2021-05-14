<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    public function index(){
        $galeries = Galerie::paginate(3);
        $page = "galerie";
        $portfolios = Portfolio::all();

        return view("backoffice.galerie.all",compact("page", "galeries","portfolios"));
            
    }


    public function destroy($id){
        $galerie = Galerie::find($id);
        Storage::disk('public')->delete('img/' . $galerie->image);
        $galerie->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $galerie = Galerie::find($id);
        $page = "galerie";

        return view("backoffice.galerie.edit", compact("galerie","page"));       
    }


    public function update($id, Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
	        'description' => 'required|max:255',
	    ]);
       $galerie = Galerie::find($id);
       $galerie->nom = $request->nom;
       Storage::disk('public')->delete('img/' . $galerie->image);
       $galerie->image = $request->file("image")->hashName();
       $galerie->description = $request->description;    
       $galerie->updated_at = now();   

       $galerie->save();
       $request->file('image')->storePublicly('img', 'public'); 
       return redirect()->route("galerie");
    }


    public function create(){
        return view("backoffice.galerie.create");
    }



    public function store(Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
	        'description' => 'required|max:255',
	    ]);
        $galerie = new Galerie;
        $galerie->nom = $request->nom;
        $galerie->image = $request->file("image")->hashName();
        $galerie->description = $request->description;
        $galerie->created_at = now();   
 
        $galerie->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('galerie')->with('message', 'The success message!');
    }

    public function download($id) {
        $galerie = Galerie::find($id);
        return Storage::disk("public")->download("img/" . $galerie->image);
    }

    public function show($id){
        $galeries = Galerie::all();
        $galerie = Galerie::find($id);
        $portfolios = Portfolio::all();
        $page = "galerie";
        return view('backoffice.galerie.show',compact('galerie','galeries',"page", "portfolios"));
    }
}
