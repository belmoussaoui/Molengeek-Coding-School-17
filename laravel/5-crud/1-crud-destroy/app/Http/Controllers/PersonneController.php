<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    function index() {
        $personnes = Personne::all();
        return view('personne', compact('personnes'));
    }

    function destroy($id) {
        $personne = Personne::find($id);
        $personne->delete();
        return redirect()->back();
    }
}
