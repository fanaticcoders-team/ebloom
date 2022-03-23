<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $florist;
    protected $userCount;

    public function __construct($florist,$userCount)
    {
        $this->florist = $florist;
        $this->userCount = $userCount;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (app()->getLocale() == 'en' ) {
            
            $subjact = 'Your Order Delivered';
        }else{
            $subjact = 'Η παραγγελία σας παραδόθηκε';

        }
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.shipped')->subject($subjact)->with([
            'florist' => $this->florist,
            'userCount' => $this->userCount, 
        ]);
    }
}
