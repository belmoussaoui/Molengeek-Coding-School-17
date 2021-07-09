<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

     public function send(Request $request) {
         $mails = Newsletter::all();
         
         foreach ($mails as $mail) {
            $contenuEmail  = [
                'name'  =>  "new post",
                'email'  =>  $mail->email,
                'subject'  =>  "test",
                'message'  =>  "test2"
            ];
            Mail::to($mail->email)->send(new NewsletterMail($contenuEmail));
        }
        return  redirect('/#contact')->with('message', 'message sended!');
     }
}
