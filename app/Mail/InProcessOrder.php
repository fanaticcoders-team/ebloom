<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InProcessOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $florist;
    protected $order;
    protected $products;


    public function __construct($florist,$order,$products)
    {
        $this->florist = $florist;
        $this->order = $order;
        $this->products = $products;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (app()->getLocale() == 'en' ) {
            # code...
            $subjact = 'Your Order is in-process';
        }else{
            $subjact = 'Η παραγγελία σας βρίσκεται σε εξέλιξη';

        }
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.inProcess')->subject($subjact)->with([
            'florist' => $this->florist,
            'order' => $this->order, 
            'products' => $this->products, 
            
        ]);
    }
}
