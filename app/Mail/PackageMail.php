<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PackageMail extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * Product Data as an Array
     * @var array
     */
    public $package;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($package)
    {
        $this->package = $package;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Kensoh : Nouveau colis ajouté')
            ->view('mail.package-mail');
    }
}
