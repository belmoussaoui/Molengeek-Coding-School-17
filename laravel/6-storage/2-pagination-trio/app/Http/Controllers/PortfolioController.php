<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::paginate(3);
        $page = "portfolio";
        $galeries = Galerie::all();

        return view("backoffice.portfolio.all",compact("page", "portfolios", "galeries"));
            
    }


    public function destroy($id){
        $portfolio = Portfolio::find($id);
        Storage::disk('public')->delete('img/' . $portfolio->image);
        $portfolio->delete();

        return redirect()->back();       
    }


    public function edit($id){
        $portfolio = Portfolio::find($id);
        $page = "portfolio";

        return view("backoffice.portfolio.edit", compact("portfolio","page"));       
    }


    public function update($id, Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
       $portfolio = Portfolio::find($id);
       $portfolio->nom = $request->nom;
       Storage::disk('public')->delete('img/' . $portfolio->image);
       $portfolio->image = $request->file("image")->hashName();
       $portfolio->categorie = $request->categorie;
       $portfolio->description = $request->description;    
       $portfolio->updated_at = now();   

       $portfolio->save();
       $request->file('image')->storePublicly('img', 'public'); 
       return redirect()->route("portfolio")->with('message', 'The success message!');;
    }


    public function create(){
        return view("backoffice.portfolio.create");
    }



    public function store(Request $request){
        $request->validate([
	        'nom' => 'required|max:30',
	        'image' => 'required',
            'categorie' => 'required|max:50',
	        'description' => 'required|max:255',
	    ]);
        $portfolio = new portfolio;
        $portfolio->nom = $request->nom;
        $portfolio->image = $request->file("image")->hashName();
        $portfolio->categorie = $request->categorie;
        $portfolio->description = $request->description;
        $portfolio->created_at = now();   
 
        $portfolio->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('portfolio')->with('message', 'The success message!');
    }

    public function download($id) {
        $portfolio = portfolio::find($id);
        return Storage::disk("public")->download("img/" . $portfolio->image);
    }

    public function show($id){
        $portfolios = portfolio::all();
        $portfolio = portfolio::find($id);
        $galeries = Galerie::all();
        $page = "portfolio";
        return view('backoffice.portfolio.show',compact('portfolio','portfolios',"page", "galeries"));
    }
}
