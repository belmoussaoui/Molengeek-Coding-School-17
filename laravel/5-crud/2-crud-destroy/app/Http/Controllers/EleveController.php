<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index() {
        $eleves = Eleve::all();
        return view('backoffice.eleve.all', compact('eleves'));
    }
    
    public function destroy($id) {
        $eleve = Eleve::find($id);
        $eleve->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $eleve = Eleve::find($id);
        return view('backoffice.eleve.edit', compact('eleve'));
    }

    public function update($id, Request $request) {
        $eleve = Eleve::find($id);
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->age = $request->age;
        $eleve->ddn = $request->ddn;
        $eleve->estBelge = $request->estBelge ? true: false;
        $eleve->updated_at = now();
        
        $eleve->save();
        return redirect()->route('eleve');
    }

}
