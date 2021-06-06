<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::paginate(5);
        $navbar = true;
        return view('backoffice.counter.all', compact('counters', 'navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.counter.create');
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
            'title'=>'required',
            'number'=>'required'
        ]);

        $counter = new Counter();

        $counter->title = $request->title;
        $counter->number = $request->number;
        $counter->updated_at = now();
        
        $counter->save();

        return redirect()->route('counter.index', compact('counter'))->with("message", "$counter->title a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        return view('backoffice.counter.show', compact('counter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        return view("backoffice.counter.edit", compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
        $request->validate([
            'title'=>'required',
            'number'=>'required'
        ]);

        $counter->title = $request->title;
        $counter->number = $request->number;
        $counter->updated_at = now();
        
        $counter->save();

        return redirect()->route('counter.index', compact('counter'))->with("message", "$counter->title a bien été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();

        return redirect()->back();
    }
}
