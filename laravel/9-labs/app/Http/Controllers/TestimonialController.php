<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function edit($id) {
        $testimonial = Testimonial::find($id);
        return view('backoffice.testimonial.edit', compact('testimonial'));
    }

    public function update($id, Request $request) {
        $testimonial = Testimonial::find($id);
        $request->validate([
            'title' => 'required',
        ]);

        $testimonial->title = $request->title;


        if ($request->file('image')) {
            Storage::disk('public')->delete('img/' . $testimonial->image);
            $testimonial->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img', 'public');
        }

        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect('/#testimonial');//->with('message', 'The Testimonial section has been updated.');
    }
}
