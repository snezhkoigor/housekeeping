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
    public $text;
	
	
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
        $this->text = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->view('emails.invoice.created')
	        ->subject('Заказ на сайте СпецМастер.');
    }
}
