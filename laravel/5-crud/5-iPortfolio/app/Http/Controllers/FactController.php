<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index() {
        $facts = Fact::all();
        return view('backoffice.fact.all', compact('facts'));
    }

    public function delete($id) {
        $fact = Fact::find($id);
        $fact->delete();
        return redirect()->back();
    }
    
    public function edit($id) {
        $fact = Fact::find($id);
        return view('backoffice.fact.edit', compact('fact'));
    }
    
    public function update($id, Request $request) {
        $fact = Fact::find($id);
        $fact->icon = $request->icon;
        $fact->number = $request->number;
        $fact->sentence = $request->sentence;
        $fact->updated_at = now();
        $fact->save();
        return redirect()->route('fact');
    }
    
    public function create() {
        return view('backoffice.fact.create');
    }
    
    public function store(Request $request) {
        $fact = new Fact();
        $fact->icon = $request->icon;
        $fact->number = $request->number;
        $fact->sentence = $request->sentence;
        $fact->created_at = now();
        $fact->save();
        return redirect()->route('fact');
    }
}
