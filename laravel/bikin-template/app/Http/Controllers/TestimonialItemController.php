<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\TestimonialItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.testimonial.item.create');
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
            'quote' => 'required',
            'name' => 'required',
            'job' => 'required',
            'image' => 'required'
        ]);

        $testimonialItem = new TestimonialItem();
        $testimonialItem->quote = $request->quote;
        $testimonialItem->name = $request->name;
        $testimonialItem->job = $request->job;
        $testimonialItem->testimonial_id = 1;
        $testimonialItem->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img/testimonials', 'public');
        $testimonialItem->save();
        $testimonialItem->updated_at = now();

        return redirect()->route('testimonials.index')->with('message', 'Testimonial item has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialItem $testimonialItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialItem $testimonialItem)
    {
        return view('backoffice.testimonial.item.edit', compact('testimonialItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialItem $testimonialItem)
    {
        $request->validate([
            'quote' => 'required',
            'name' => 'required',
            'job' => 'required',
        ]);

        $testimonialItem->quote = $request->quote;
        $testimonialItem->name = $request->name;
        $testimonialItem->job = $request->job;
        if ($request->image) {
            Storage::disk('public')->delete('img/testimonials/' . $testimonialItem->image);
            $testimonialItem->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img/testimonials', 'public');
        }
        
        $testimonialItem->save();
        $testimonialItem->updated_at = now();

        return redirect()->route('testimonials.index')->with('message', 'Testimonial item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialItem $testimonialItem)
    {
        Storage::disk('public')->delete('img/testimonials/' . $testimonialItem->image);
        $testimonialItem->delete();
        return redirect()->back()->with('message', 'Feature Item has been deleted');
    }
}
