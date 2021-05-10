<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index() {
        $entreprises = Entreprise::all();
        return view('/backoffice.entreprise.all', compact('entreprises'));
    }

    public function delete($id) {
        $entreprise = Entreprise::find($id);
        $entreprise->delete();
        return redirect()->back();
    }
    
    public function edit($id) {
        $entreprise = Entreprise::find($id);
        return view('/backoffice.entreprise.edit', compact('entreprise'));
    }
    
    public function update($id, Request $request) {
        $entreprise = Entreprise::find($id);
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->ndt = $request->ndt;
        $entreprise->contact = $request->contact;
        $entreprise->image = $request->image;
        $entreprise->updated_at = now();

        $entreprise->save();

        return redirect()->route('entreprise');
    }

     public function create() {
        return view('/backoffice.entreprise.create');
    }
    
    public function store(Request $request) {
        $entreprise = new Entreprise();
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->ndt = $request->ndt;
        $entreprise->contact = $request->contact;
        $entreprise->image = $request->image;
        $entreprise->updated_at = now();

        $entreprise->save();

        return redirect()->route('entreprise');
    }
}
