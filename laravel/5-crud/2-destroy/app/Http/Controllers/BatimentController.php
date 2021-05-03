<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index() {
        $batiments = Batiment::all();
        return view('batiment', compact('batiments'));
    }
    
    public function destroy($id) {
        $batiment = Batiment::find($id);
        $batiment->delete();
        return redirect()->back();
    }
}
