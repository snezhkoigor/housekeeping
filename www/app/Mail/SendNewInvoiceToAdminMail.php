<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewInvoiceToAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $phone;
    public $city;
    public $message;
	
	
	/**
	 * SendNewInvoiceToAdminMail constructor.
	 * @param $phone
	 * @param $city
	 * @param $message
	 */
    public function __construct($phone, $city, $message)
    {
        $this->phone = $phone;
        $this->city = $city;
        $this->message = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invoice.created');
    }
}
