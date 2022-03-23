<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewShopMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $shopName;
    protected $shopPhone;
    protected $email;
    protected $shopAddress;
    protected $shopOperator;
    protected $operatorPhone;
    protected $message;
    



    public function __construct($shopName,$shopPhone,$email,$shopAddress,$shopOperator,$operatorPhone,$message)
    {
        $this->shopName = $shopName;
        $this->shopPhone = $shopPhone;
        $this->email = $email;
        $this->shopAddress = $shopAddress;
        $this->shopOperator = $shopOperator;
        $this->operatorPhone = $operatorPhone;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('Info@ebloom.gr')->markdown('emails.orders.newShop')->subject('New Shop Details')->with([
            'shopName' => $this->shopName,
            'shopPhone' => $this->shopPhone,
            'email' => $this->email,
            'shopAddress' => $this->shopAddress,
            'shopOperator' => $this->shopOperator,
            'operatorPhone' => $this->operatorPhone,
            'message' => $this->message,


        ]);
    }
}
