<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StatusUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $florist;
    public function __construct($florist)
    {
        $this->florist = $florist;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.statusUpdate')->subject('Status not updated!')->with([
            'florist' => $this->florist, 
        ]);;
    }
}
