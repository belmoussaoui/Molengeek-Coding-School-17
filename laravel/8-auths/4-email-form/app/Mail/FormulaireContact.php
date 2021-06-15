<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormulaireContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contenuEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenuEmail)
    {
        $this->contenuEmail = $contenuEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
