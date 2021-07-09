<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'email' => 'required|unique:newsletters,email',
        ]);
        $newsletter = new Newsletter();

        $newsletter->email = $request->email;
        $newsletter->created_at = now();
        $newsletter->save();
        return redirect()->back();

    }
}
