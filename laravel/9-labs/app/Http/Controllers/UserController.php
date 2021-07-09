<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        return view('backoffice.user.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       return view('backoffice.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize("update", $user);
        $request->validate([
            'name' => 'required',
        ]);
        
        $user->name = $request->name;
        if ($request->avatar) {
            Storage::disk('public')->delete('img/team/' . $user->avatar);
            $user->avatar = $request->file('avatar')->hashName();
            $request->file('avatar')->storePublicly('img/team', 'public');

        }  
        if ($request->role_id) {
            $user->role_id = $request->role_id;
        }
        $user->job = $request->job;
        $user->save();
        $user->updated_at = now();
        return redirect()->route('users.index')->with('message', 'The User has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize("delete", $user);
        $user->delete();
        return redirect()->back()->with('message', 'The User has been deleted.');
    }
}
