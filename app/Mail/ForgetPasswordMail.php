<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $password;

    public function __construct($password)
    {
        $this->password = $password;
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (app()->getLocale() == 'gr') {
            # code...
            $subject = 'Αλλαγή Κωδικού';
        } else {
            $subject = 'Your new password';

            # code...
        }
        

        return $this->from('Info@ebloom.gr')->markdown('emails.orders.forgetPassword')->subject($subject)->with([
            'password' => $this->password,
        ]);;
    }
}
