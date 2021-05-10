<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();
        return view('/backoffice.portfolio.all', compact('portfolios'));
    }

    public function delete($id) {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->back();
    }
    
    public function edit($id) {
        $portfolio = Portfolio::find($id);
        return view('/backoffice.portfolio.edit', compact('portfolio'));
    }
    
    public function update($id, Request $request) {
        $portfolio = Portfolio::find($id);
        $portfolio->titre = $request->titre;
        $portfolio->description = $request->description;
        $portfolio->path = $request->path;
        $portfolio->categorie = $request->categorie;
        $portfolio->updated_at = now();

        $portfolio->save();

        return redirect()->route('portfolio');
    }

    public function create() {
        return view('/backoffice.portfolio.create');
    }

    public function store(Request $request) {
        $portfolio = new Portfolio();
        $portfolio->titre = $request->titre;
        $portfolio->description = $request->description;
        $portfolio->path = $request->path;
        $portfolio->categorie = $request->categorie;
        $portfolio->updated_at = now();

        $portfolio->save();

        return redirect()->route('portfolio');
    }
}
