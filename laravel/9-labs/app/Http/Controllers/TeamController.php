<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
     public function edit($id) {
        $team = Team::find($id);
        return view('backoffice.team.edit', compact('team'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
        ]);
        
        $service = Team::find($id);

        $service->title = $request->title;

        $service->updated_at = now();
        $service->save();
        return redirect('/#services');//->with('message', 'The Team section has been updated.');
    }
}
