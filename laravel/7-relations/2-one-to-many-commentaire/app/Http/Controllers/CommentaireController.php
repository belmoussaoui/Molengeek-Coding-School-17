<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::all();
        return view('backoffice.commentaire.all', compact('commentaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('backoffice.commentaire.create', compact('articles'));
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
        ]);
        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->message = $request->message;
        $commentaire->ddc = $request->ddc;
        $commentaire->article_id = $request->article_id;
        $commentaire->created_at = now();
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'Vous avez créer un commentaire.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        return view('backoffice.commentaire.read', compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        $articles = Article::all();
        return view('backoffice.commentaire.edit', compact('commentaire', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $request->validate([
            'nom' => 'required',
        ]);
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->message = $request->message;
        $commentaire->ddc = $request->ddc;
        $commentaire->article_id = $request->article_id;
        $commentaire->updated_at = now();
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'Vous avez mis à jour un commentaire.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé un commentaire.');
    }
}
