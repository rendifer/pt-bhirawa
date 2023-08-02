<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Membuat instance pesan baru.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Membangun pesan.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactUs')
                    ->from($this->email['email'], $this->email['nama'])
                    ->subject('Customer PT Bhirawa - ' . $this->email['subject']);
    }
    
}



