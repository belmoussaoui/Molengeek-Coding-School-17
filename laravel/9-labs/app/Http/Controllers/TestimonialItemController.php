<?php

namespace App\Http\Controllers;

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
        $testimonialItems = TestimonialItem::paginate(3);
        return view('backoffice.testimonial.item.all', compact('testimonialItems'));
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
            'name' => 'required',
            'quote' => 'required',
            'job' => 'required',
            'avatar' => 'required',
        ]);

        $testimonialItem = new TestimonialItem();
        $testimonialItem->name = $request->name;
        $testimonialItem->quote = $request->quote;
        $testimonialItem->job = $request->job;
        
        $testimonialItem->avatar = $request->file('avatar')->hashName();
        $request->file('avatar')->storePublicly('img/avatar', 'public');

        $testimonialItem->testimonial_id = 1;
        $testimonialItem->created_at = now();
        $testimonialItem->save();
        return redirect()->route('testimonial-items.index')->with('message', 'The Testimonial item has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialItem $testimonialItem)
    {
        return view('backoffice.testimonial.item.show');
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
            'name' => 'required',
            'quote' => 'required',
            'job' => 'required',
            'avatar' => 'required',
        ]);

        $testimonialItem->name = $request->name;
        $testimonialItem->quote = $request->quote;
        $testimonialItem->job = $request->job;
        
        Storage::disk('public')->delete('img/avatar/' . $testimonialItem->avatar);
        $testimonialItem->avatar = $request->file('avatar')->hashName();
        $request->file('avatar')->storePublicly('img/avatar', 'public');

        $testimonialItem->updated_at = now();
        $testimonialItem->save();
        return redirect()->route('testimonial-items.index')->with('message', 'The Testimonial item has been created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialItem $testimonialItem)
    {
        Storage::disk('public')->delete('img/' . $testimonialItem->image);
        $testimonialItem->delete();
        return redirect()->back()->with('message', 'The Testimonial item has been deleted.');
    }
}
