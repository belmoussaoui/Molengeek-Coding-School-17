<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function edit($id) {
        $feature = Feature::find($id);
        return view('backoffice.feature.edit', compact('feature'));
    }
    
    public function update($id, Request $request) {
         $request->validate([
            'title' => 'required',
            'button' => 'required',
            'button_href' => 'required',
        ]);
        
        $feature = Feature::find($id);

        $feature->title = $request->title;
        $feature->button = $request->button;
        $feature->button_href = $request->button_href;

        if ($request->file('image')) {
            Storage::disk('public')->delete('img/' . $feature->logo);
            $feature->image = $request->file('image')->hashName();
            $request->file('image')->storePublicly('img', 'public');
        }

        $feature->updated_at = now();
        $feature->save();
        return redirect('/#feature');//->with('message', 'The Feature section has been updated.');
    }
}
