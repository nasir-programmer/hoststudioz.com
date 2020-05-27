<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

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
        // echo "email function<pre>";
        // print_r($this->data);
        // exit;
        return $this->view('email.invoiceCreated')->attach($this->data['Attachment']);
        // return $this->view('email.invoiceCreated')
        // ->attachFromStorage(($this->data['Attachment']), 'name.pdf', [
        //     'mime' => 'application/pdf'
        // ]);
    }
}
