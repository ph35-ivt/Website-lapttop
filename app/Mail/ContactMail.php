<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
   // public $data,$name,$email,$phone,$address,$product_id,$date_order,$total,$payment;
    public $data;
    // public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
         return $this->from('buiduy057@gmail.com')->subject('Đơn hàng')->view('mail.checkmail')->with('data', $this->data);
    }
}
