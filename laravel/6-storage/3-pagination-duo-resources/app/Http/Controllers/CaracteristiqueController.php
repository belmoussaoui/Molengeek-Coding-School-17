<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristiques = Caracteristique::paginate(5);
        return view('backoffice.caracteristique.all', compact('caracteristiques'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.caracteristique.create');
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
            'icone' => 'required',
            'chiffres' => 'required|integer',
            'nom' => 'required',
        ]);
        $caracteristique = new Caracteristique();
        $caracteristique->icone = $request->icone;
        $caracteristique->chiffres = $request->chiffres;
        $caracteristique->nom = $request->nom;
        $caracteristique->created_at = now();
        $caracteristique->save();
        return redirect()->route('caracteristiques.index')
            ->with('message', 'Vous avez bien créée une nouvelle caractéritisque :' . $caracteristique->nom);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristique $caracteristique)
    {
        return view('backoffice.caracteristique.read', compact('caracteristique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristique $caracteristique)
    {
        return view('backoffice.caracteristique.edit', compact('caracteristique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristique $caracteristique)
    {
        $request->validate([
            'icone' => 'required',
            'chiffres' => 'required|integer',
            'nom' => 'required',
        ]);
        $caracteristique->icone = $request->icone;
        $caracteristique->chiffres = $request->chiffres;
        $caracteristique->nom = $request->nom;
        $caracteristique->updated_at = now();
        $caracteristique->save();
        return redirect()->route('caracteristiques.index')
            ->with('message', 'Vous avez bien modifiée la caractéritisque :' . $caracteristique->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristique $caracteristique)
    {
        $caracteristique->delete();
        return redirect()->back();
    }
}
