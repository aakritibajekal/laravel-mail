<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( 'aakriti@test.com' ) // Who the mail is from.
        ->subject( 'Welcome to my Website!' ) // The mail's subject line.
        ->view( 'emails.welcome' ) // Which HTML/rich output we should send.
        ->text( 'emails.welcome_plain' ); // Fallback, in case we're sending a simple text mail.
    }
}
