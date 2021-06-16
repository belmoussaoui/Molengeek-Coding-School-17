<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icon::all();
        return view('backoffice.about.icon.all', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.about.icon.create');
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
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $icon = new Icon();
        $icon->title = $request->title;
        $icon->description = $request->description;
        $icon->icon = $request->icon;
        $icon->about_id = 1;
        $icon->created_at = now();
        $icon->updated_at = now();
        $icon->save();

        return redirect()->route('icons.index')->with('message', 'Icon has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function show(Icon $icon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function edit(Icon $icon)
    {
        return view('backoffice.about.icon.edit', compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icon $icon)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);

        $icon->title = $request->title;
        $icon->description = $request->description;
        $icon->icon = $request->icon;
        $icon->updated_at = now();
        $icon->save();

        return redirect()->route('icons.index')->with('message', 'Icon has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        $icon->delete();
        return redirect()->back()->with('message', 'Icon has been deleted');
    }
}
