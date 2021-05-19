<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(2);
        return view('backoffice.portfolio.all',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.portfolio.create');
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
            "categorie"=>"required",
            "description"=>"required"
        ]);
        $portfolio= new Portfolio();
        $portfolio->nom = $request->nom;
        $portfolio->image = $request->file('image')->hashName();
        $portfolio->categorie = $request->categorie;
        $portfolio->description = $request->description;
        $portfolio->updated_at=now();
        $portfolio->save();
        $request->file('image')->storePublicly("img","public");
        return redirect()->route('portfolios.index')->with('message','Vous avez bien créée un nouveau portfolio :'." ".  $portfolio->nom);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.read',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('backoffice.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "nom"=>"required",
            "image"=>"required",
            "categorie"=>"required",
            "description"=>"required"
        ]);
        $portfolio= new Portfolio();
        $portfolio->nom = $request->nom;
        Storage::disk('public')->delete('img/'. $portfolio->image);
        $portfolio->image = $request->file('image')->hashName();
        $portfolio->categorie = $request->categorie;
        $portfolio->description = $request->description;
        $portfolio->updated_at=now();
        $portfolio->save();

        $request->file('image')->storePublicly("img","public");
        return redirect()->route('portfolios.index')->with('message','Vous avez bien modifié le portfolio :'." " . $portfolio->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete('img/'. $portfolio->image);
        $portfolio->delete();
        return redirect()->back();
    }
    public function download($id){
        $portfolio = Portfolio::find($id);
        return Storage::disk('public')->download('img/'.$portfolio->image);
    }
}
