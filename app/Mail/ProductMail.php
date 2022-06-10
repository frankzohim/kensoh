<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductMail extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * Product Data as an Array
     * @var array
     */
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $product)
    {
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Kensoh : Nouveau Produit')
            ->view('mail.template.product');
    }
}
