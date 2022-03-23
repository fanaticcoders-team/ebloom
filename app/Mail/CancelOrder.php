<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CancelOrder extends Mailable
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
            
            $subjact = 'Order Canceled';
        }else{
            $subjact = 'Η παραγγελία ακυρώθηκε';

        }
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.cancelOrder')->subject($subjact)->with([
            'florist' => $this->florist, 
            'order' => $this->order, 
            'products' => $this->products, 
            
        ]);;
    }
}
