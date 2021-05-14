<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use App\Models\Galerie;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    public function index(){
        $caracteristiques = Caracteristique::paginate(3);
        $page = "caracteristique";
        $portfolios = Portfolio::all();
        $galeries = Galerie::all();
        return view("backoffice.caracteristique.all",compact("caracteristiques","page","portfolios", "galeries"));       
    }


    public function destroy($id){
        $caracteristique = Caracteristique::find($id);
        $caracteristique->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $caracteristique = Caracteristique::find($id);
        $page = "caracteristique";

        return view("backoffice.caracteristique.edit", compact("caracteristique","page"));       
    }


    public function update($id, Request $request){
        $request->validate([
	        'icone' => 'required|max:255',
	        'chiffre' => 'required|integer',
            'nom' => 'required',
	    ]);

        $caracteristique = Caracteristique::find($id);
        $caracteristique->icone = $request->icone;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;   
        $caracteristique->updated_at = now();   

        $caracteristique->save();

        return redirect()->route("caracteristique");
    }


    public function create(){
        return view("backoffice.caracteristique.create");
    }


    public function store(Request $request){
        $request->validate([
	        'icone' => 'required|max:255',
	        'chiffre' => 'required|integer',
            'nom' => 'required',
	    ]);
        $caracteristique = new Caracteristique();
        $caracteristique->icone = $request->icone;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;   
        $caracteristique->created_at = now();   
 
        $caracteristique->save();
 
        return redirect()->route('caracteristique')->with('message', 'The success message!');;
    }
}
