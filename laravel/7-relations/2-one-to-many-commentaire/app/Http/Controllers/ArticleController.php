<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(1);
        return view('backoffice.article.all', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.article.create');
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
            'description' => 'required'
        ]);
        $article = new Article();
        $article->nom = $request->nom;
        $article->image = $request->file('image')->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->ddp = $request->ddp;
        $article->created_at = now();
        $article->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('articles.index')->with('message', 'Vous avez créer un article.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('backoffice.article.read', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('backoffice.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required'
        ]);
        $article->nom = $request->nom;
        Storage::disk('public')->delete('img/' . $article->image);
        $article->image = $request->file('image')->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->ddp = $request->ddp;
        $article->updated_at = now();
        $article->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('articles.index')->with('message', 'Vous avez mis à jour un article.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete('img/' . $article->image);
        $article->delete();
        return redirect()->back()->with('message', 'Vous avez supprimé un article.');
    }

     public function download($id)
    {
        $photo = Article::find($id);
        return Storage::disk('public')->download('img/' . $photo->image);
    }
}
