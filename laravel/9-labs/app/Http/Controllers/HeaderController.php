<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function edit($id) {
        $header = Header::find($id);
        return view('backoffice.header.edit', compact('header'));
    }

    public function update($id, Request $request) {
        $header = Header::find($id);
        $request->validate([
            'item1' => 'required',
            'item2' => 'required',
            'item3' => 'required',
            'item4' => 'required',
        ]);

        $header->item1 = $request->item1;
        $header->item2 = $request->item2;
        $header->item3 = $request->item3;
        $header->item4 = $request->item4;


        if ($request->file('logo')) {
            Storage::disk('public')->delete('img/' . $header->logo);
            $header->logo = $request->file('logo')->hashName();
            $request->file('logo')->storePublicly('img', 'public');
        }

        $header->updated_at = now();
        $header->save();
        return redirect('/#header');//->with('message', 'The Header section has been updated.');
    }
}
