<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function edit($id) {
        $footer = Footer::find($id);
        return view('backoffice.footer.edit', compact('footer'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'description' => 'required',
            'site' => 'required',
            'site_href' => 'required',
        ]);
        
        $footer = Footer::find($id);

        $footer->description = $request->description;
        $footer->site = $request->site;
        $footer->site_href = $request->site_href;

        $footer->updated_at = now();
        $footer->save();
        return redirect('/#footer');//->with('message', 'The Footer section has been updated.');
    }
}
