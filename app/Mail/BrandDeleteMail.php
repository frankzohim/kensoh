<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BrandDeleteMail extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * Product Data as an Array
     * @var array
     */
    public $brand;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Kensoh : Marque supprimée')
            ->view('mail.brand-delete-mail');
    }
}
