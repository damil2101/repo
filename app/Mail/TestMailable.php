<?php

namespace App\Mail;

use App\Http\Controllers\Insrequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $product;
    public function __construct($product)
    {
        $this->product=$product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name="Damil";
        $address="damil51981@gmail.com";
        $subject="insurance";


        return $this->view('emailbody')->with('product',$this->product)
            ->from($address,$name)
            ->subject($subject);
    }
}
