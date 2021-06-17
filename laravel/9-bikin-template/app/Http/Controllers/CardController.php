<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        return view('backoffice.portfolio.card.all', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.portfolio.card.create');
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
            'category' => 'required',
            'image' => 'required',
        ]);
        $card = new Card();
        $card->category = $request->category;
        Storage::disk('public')->delete('img/portfolio/' . $card->image);
        $card->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/portfolio', 'public');   

        $card->portfolio_id = 1;
        $card->created_at = now();
        $card->updated_at = now();
        $card->save();

        return redirect()->route('portfolio.index')->with('message', 'Card has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('backoffice.portfolio.card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'category' => 'required',
        ]);
        $card->category = $request->category;
        if ($request->image) {
            Storage::disk('public')->delete('img/portfolio/' . $card->image);
            $card->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/portfolio', 'public');   
        }
        $card->portfolio_id = 1;
        $card->updated_at = now();
        $card->save();

        return redirect()->route('portfolio.index')->with('message', 'Card has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        Storage::disk('public')->delete('img/portfolio/' . $card->image);
        $card->delete();
        return redirect()->back()->with('message', 'Card has been deleted');
    }
}
