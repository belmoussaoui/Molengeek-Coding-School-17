<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(5);
        $navbar = true;
        return view('backoffice.testimonial.all', compact('testimonials', 'navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.testimonial.create');
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
            'auteur'=>'required',
            'quotes'=>'required',
            'job'=>'required'
        ]);

        $testimonial = new Testimonial();

        $testimonial->auteur = $request->auteur;
        $testimonial->quotes = $request->quotes;
        $testimonial->job = $request->job;

        if ($request->file("image") !== null) {
            $testimonial->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
        }else{
            $testimonial->image = 'user.png';
        }

        $testimonial->created_at = now();
        
        $testimonial->save();

        return redirect()->route('testimonial.index', compact('testimonial'))->with("message", "$testimonial->title a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('backoffice.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('backoffice.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'auteur'=>'required',
            'quotes'=>'required',
            'job'=>'required'
        ]);

        $testimonial->auteur = $request->auteur;
        $testimonial->quotes = $request->quotes;
        $testimonial->job = $request->job;

        if ($request->file("image") !== null) {
            $testimonial->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
        }

        $testimonial->updated_at = now();
        
        $testimonial->save();

        return redirect()->route('testimonial.index', compact('testimonial'))->with("message", "$testimonial->auteur a bien été modifié.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image !== 'user.png') {
            Storage::disk("public")->delete("img/" . $testimonial->image);
        }
        $testimonial->delete();

        return redirect()->back();
    }
}
