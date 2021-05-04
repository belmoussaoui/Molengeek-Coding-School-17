<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::all();
        return view('backoffice.formation.all', compact('formations'));
    }
    
    public function destroy($id) {
        $formation = Formation::find($id);
        $formation->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $formation = Formation::find($id);
        return view('backoffice.formation.edit', compact('formation'));
    }
    
    public function update($id, Request $request) {
        $formation = Formation::find($id);
        $formation->nom = $request->nom;
        $formation->ndp = $request->ndp;
        $formation->ndpHC = $request->ndpHC;
        $formation->description = $request->description;
        $formation->updated_at = now();

        $formation->save();
        
        return redirect()->route('formation');
    }
}
