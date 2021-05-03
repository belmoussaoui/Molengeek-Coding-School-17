<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index() {
        $eleves = Eleve::all();
        return view('eleve', compact('eleves'));
    }
    
    public function destroy($id) {
        $eleve = Eleve::find($id);
        $eleve->delete();
        return redirect()->back();
    }
}
