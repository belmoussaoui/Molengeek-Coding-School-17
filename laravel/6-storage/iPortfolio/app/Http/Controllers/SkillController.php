<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
        $skills = Skill::all();
        return view('backoffice.skill.all', compact('skills'));
    }

    public function delete($id) {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back();
    }
    
    public function edit($id) {
        $skill = Skill::find($id);
        return view('backoffice.skill.edit', compact('skill'));
    }
    
    public function update($id, Request $request) {
        $skill = Skill::find($id);
        $skill->language = $request->language;
        $skill->value = $request->value;
        $skill->updated_at = now();
        $skill->save();
        return redirect()->route('skill');
    }
    
    public function create() {
        return view('backoffice.skill.create');
    }
    
    public function store(Request $request) {
        $skill = new Skill();
        $skill->language = $request->language;
        $skill->value = $request->value;
        $skill->created_at = now();
        $skill->save();
        return redirect()->route('skill');
    }
}
