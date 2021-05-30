<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::paginate(5);
        return view('backoffice.equipe.all', compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        $equipes = Equipe::all();
        return view('backoffice.equipe.create', compact('continents', 'equipes'));
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
            'ville' => 'required',
            'pays' => 'required',
            // 'max' => 'required|integer',
            'ATT' => 'required|integer',
            'CT' => 'required|integer',
            'DC' => 'required|integer',
            'RP' => 'required|integer',
            'continent_id' => 'required',
        ]);
        $equipe = new Equipe();
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->ATT + $request->CT + $request->DC + $request->RP;
        $equipe->ATT = $request->ATT;
        $equipe->CT = $request->CT;
        $equipe->DC = $request->DC;
        $equipe->RP = $request->RP;
        $equipe->created_at = now();
        $equipe->updated_at = now();
        $equipe->continent_id = $request->continent_id;
        $equipe->save();
        return redirect()->route('equipes.index')->with('message', 'Vous avez créé une équipe.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        $joueurs = Joueur::all();
        $att = Joueur::where('role_id', 1)->where('equipe_id', $equipe->id)->get();
        $mil = Joueur::where('role_id', 2)->where('equipe_id', $equipe->id)->get();
        $def = Joueur::where('role_id', 3)->where('equipe_id', $equipe->id)->get();
        $rem = Joueur::where('role_id', 4)->where('equipe_id', $equipe->id)->get();

        // $Att = Joueur::where("role_id", 1)->get();
        return view('backoffice.equipe.show', compact('equipe',"joueurs", "att", "mil", "def", "rem"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        $continents = Continent::all();
        return view('backoffice.equipe.edit', compact('equipe', 'continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            'nom' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            // 'max' => 'required|integer',
            'ATT' => 'required|integer',
            'CT' => 'required|integer',
            'DC' => 'required|integer',
            'RP' => 'required|integer',
            'continent_id' => 'required',
        ]);
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->ATT + $request->CT + $request->DC + $request->RP;
        $equipe->ATT = $request->ATT;
        $equipe->CT = $request->CT;
        $equipe->DC = $request->DC;
        $equipe->RP = $request->RP;
        $equipe->continent_id = $request->continent_id;
        $equipe->updated_at = now();
        
        $equipe->save();
        return redirect()->route('equipes.index')->with('message', 'Vous avez édité une équipe.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé une équipe.');
    }
    public function joueur(Request $request,$equipe_id)
    {
        $joueur = Joueur::find($request->joueur_id);
        $joueur->equipe_id=$equipe_id;
        $joueur->save();
        return redirect()->back();
    }

}