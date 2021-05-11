<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('backoffice.user.all', compact('users'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backoffice.user.edit', compact('user'));
    }
    
    public function update($id, Request $request) {
        $user = User::find($id);
        $user->birthday = $request->birthday;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->phEmailone = $request->phEmailone;
        $user->freelance = $request->freelance ? true : false;
        $user->updated_at = now();
        $user->save();
        return redirect()->route('user');
    }
}
