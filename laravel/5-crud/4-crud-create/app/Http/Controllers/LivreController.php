<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index() {
        $livres = Livre::all();
        return view('backoffice.livre.all', compact('livres'));
    }

    public function delete($id) {
        $livre = Livre::find($id);
        $livre->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $livre = Livre::find($id);
        return view('backoffice.livre.edit', compact('livre'));
    }

    public function update($id, Request $request) {
        $livre = Livre::find($id);
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->ddp = $request->ddp;
        $livre->ndp = $request->ndp;
        $livre->estMobile = $request->estMobile ? true : false;
        
        $livre->updated_at = now();
        
        $livre->save();
        return redirect()->route('livre');
    }

    public function create() {
        return view('backoffice.livre.create');
    }

     public function store(Request $request) {
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->ddp = $request->ddp;
        $livre->ndp = $request->ndp;
        $livre->estMobile = $request->estMobile ? true : false;
        
        $livre->created_at = now();
        
        $livre->save();
        return redirect()->route('livre');
    }
}
