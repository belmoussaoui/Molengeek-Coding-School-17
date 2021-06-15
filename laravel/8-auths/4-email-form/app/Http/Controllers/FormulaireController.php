<?php

namespace App\Http\Controllers;

use App\Mail\FormulaireContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormulaireController extends Controller
{
    public function sendMail(Request $request) {
        $contenuEmail = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('bilal@test.com')->send(new FormulaireContact($contenuEmail));
        return redirect('/#contact')->with('message', 'message sended!');
    }
}
