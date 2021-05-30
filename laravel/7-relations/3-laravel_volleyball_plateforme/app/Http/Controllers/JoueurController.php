<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::paginate(5);
        return view('backoffice.joueur.all', compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('backoffice.joueur.create', compact('genres','roles', 'equipes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'numero' => 'required|integer',
            'pays' => 'required',
            'role_id' => 'required',
            'genre_id' => 'required',
            'equipe_id' => 'required',
        ]);
        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->numero = $request->numero;
        $joueur->pays = $request->pays;
        $joueur->genre_id = $request->genre_id;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->created_at = now();
        $joueur->updated_at = now();
        $joueur->save();
        if ($request->photo) {
            $photo = new Photo();
            $photo->joueur_id = $joueur->id;
            $photo->url = $request->file('photo')->hashName();
            $photo->save();
            $request->file('photo')->storePublicly('img', 'public');
        }
        return redirect()->route('joueurs.index')->with('message', 'Vous avez créé un.e joueur.e mec');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view('backoffice.joueur.show', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        return view('backoffice.joueur.edit', compact('joueur', 'genres','roles', 'equipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required',
            'numero' => 'required|integer',
            'pays' => 'required',
            'role_id' => 'required',
            'genre_id' => 'required',
            'equipe_id' => 'required',
        ]);
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->numero = $request->numero;
        $joueur->pays = $request->pays;
        $joueur->genre_id = $request->genre_id;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->updated_at = now();
        $joueur->save();
        return redirect()->route('joueurs.index')->with('message', 'Vous avez éditer un.e joueur.e mec');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk('public')->delete('img/' . $joueur->photo->url);
        $joueur->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé un.e joueur.e.');
    }
}
