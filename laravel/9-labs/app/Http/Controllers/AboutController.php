<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit($id) {
        $about = About::find($id);
        return view('backoffice.about.edit', compact('about'));
    }

    public function update($id, Request $request) {
        $about = About::find($id);
        $request->validate([
            'title' => 'required',
            'paragraph1' => 'required',
            'paragraph2' => 'required',
            'button' => 'required',
            'button_href' => 'required',
            'video_href' => 'required',
        ]);

        $about->title = $request->title;
        $about->paragraph1 = $request->paragraph1;
        $about->paragraph2 = $request->paragraph2;
        $about->button = $request->button;
        $about->button_href = $request->button_href;
        $about->video_href = $request->video_href;


        if ($request->file('video_image')) {
            Storage::disk('public')->delete('img/' . $about->logo);
            $about->video_image = $request->file('video_image')->hashName();
            $request->file('video_image')->storePublicly('img', 'public');
        }

        $about->updated_at = now();
        $about->save();
        return redirect('/#header');//->with('message', 'The About section has been updated.');
    }
}
