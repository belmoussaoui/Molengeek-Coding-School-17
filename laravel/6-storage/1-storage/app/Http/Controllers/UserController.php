<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('backoffice.user.all', compact('users'));
    }

    public function destroy($id) {
        $user = User::find($id);
        Storage::disk('public')->delete('img/'  .  $user->pdp);
        $user->delete();
        return redirect()->back();

    }

    public function create() {
        return view('backoffice.user.create');
    }
    
    public function store(Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'prenom' => 'required|max:30',
            'age' => 'required|integer',
	        'email' => 'required|unique:users',
            'mdp' => 'required',
            'pdp' => 'required'
	    ]);
        $user = new User;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = Hash::make($request->mdp);
        $user->pdp = $request->file('pdp')->hashName();
        $user->created_at = now();
        $user->save();
        $request->file('pdp')->storePublicly('img', 'public');
        return redirect()->route('users')->with('message', 'The success message!');
    }

     public function download($id) {
        $user = User::find($id);
        $filepath = public_path('img/') . $user->pdp;
        return response()->download($filepath);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backoffice.user.edit', compact('user'));
    }
    
    public function show($id) {
        $user = User::find($id);
        return view('backoffice.user.show', compact('user'));
    }
    
    public function update($id, Request $request) {
        $request->validate([
	        'nom' => 'required|max:30',
	        'prenom' => 'required|max:30',
            'age' => 'required|integer',
	        'email' => 'required|unique:users',
            'mdp' => 'required',
            'pdp' => 'required'
	    ]);
        $user = User::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = Hash::make($request->mdp);
        Storage::disk('public')->delete('img/'  .  $user->pdp);
        $user->pdp = $request->file('pdp')->hashName();
        $user->updated_at = now();
        $user->save();
        $request->file('pdp')->storePublicly('img', 'public');
        return redirect()->route('users')->with('message', 'The success message!');;
    }
}
