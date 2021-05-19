<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $users = User::paginate(2);
        return view('backoffice.user.all',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "mdp"=>"required",
            "pdp"=>"required"
        ]);
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = Hash::make($request->mdp) ;
        $user->pdp = $request->file('pdp')->hashName();
        $user->updated_at=now();
        $user->save();
        $request->file('pdp')->storePublicly("img","public");
        return redirect()->route('users.index')->with('message','Vous avez bien créée un nouveau user :' . $user->nom);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backoffice.user.read',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backoffice.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "email"=>"required",
            "mdp"=>"required",
            "pdp"=>"required"
        ]);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = Hash::make($request->mdp) ;
        Storage::disk('public')->delete('img/' .$user->pdp);
        $user->pdp = $request->file('pdp')->hashName();
        $user->updated_at=now();
        $user->save();

        $request->file('pdp')->storePublicly("img","public");
        return redirect()->route('users.index')->with('message','Vous avez bien modifié l"user :' . $user->nom);
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk('public')->delete("img/".$user->pdp);
        $user->delete();
        return redirect()->back();
    }
    public function download($id){
        $user = User::find($id);
        return Storage::disk('public')->download('img/'.$user->pdp);
    }
}
