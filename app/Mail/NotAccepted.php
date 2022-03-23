<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotAccepted extends Mailable
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
        if (app()->getLocale() == 'en' ) {
            
            $subjact = 'Order not accepted';
        }else{
            $subjact = 'Η παραγγελία δεν έγινε δεκτή';

        }
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.notAccepted')->subject($subjact)->with([
            'florist' => $this->florist, 
        ]);;
    }
}
