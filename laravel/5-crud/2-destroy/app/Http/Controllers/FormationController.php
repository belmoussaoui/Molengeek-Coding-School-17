<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::all();
        return view('formation', compact('formations'));
    }
    
    public function destroy($id) {
        $formation = Formation::find($id);
        $formation->delete();
        return redirect()->back();
    }
}
