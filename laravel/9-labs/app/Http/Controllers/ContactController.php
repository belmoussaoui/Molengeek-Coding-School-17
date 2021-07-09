<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit($id) {
        $contact = Contact::find($id);
        return view('backoffice.contact.edit', compact('contact'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'marker' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'number' => 'required',
            'mail' => 'required',
        ]);
        
        $contact = Contact::find($id);

        $contact->title = $request->title;
        $contact->marker = $request->marker;
        $contact->subtitle = $request->subtitle;
        $contact->description = $request->description;
        $contact->address1 = $request->address1;
        $contact->address2 = $request->address2;
        $contact->number = $request->number;
        $contact->mail = $request->mail;

        $contact->updated_at = now();
        $contact->save();
        return redirect('/#contact');//->with('message', 'The Contact section has been updated.');
    }
}
