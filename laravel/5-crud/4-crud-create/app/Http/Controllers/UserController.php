<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('backoffice.user.all', compact('users'));
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backoffice.user.edit', compact('user'));
    }

    public function update($id, Request $request) {
        $user = User::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->photo = $request->photo;
        
        $user->updated_at = now();
        
        $user->save();
        return redirect()->route('user');
    }

    public function create() {
        return view('backoffice.user.create');
    }

    public function store(Request $request) {
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->photo = $request->photo;
        
        $user->created_at = now();
        
        $user->save();
        return redirect()->route('user');
    }
}
