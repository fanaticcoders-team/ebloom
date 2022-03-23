<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $firstname;
    protected $lastname;
    protected $cellphone;
    protected $email;
    protected $message;
    

    public function __construct($firstname,$lastname,$cellphone,$email,$message)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->cellphone = $cellphone;
        $this->email = $email;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.contact')->subject('Contact Details!')->with([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'cellphone' => $this->cellphone,
            'email' => $this->email,
            'message' => $this->message,
        ]);
    }
}
