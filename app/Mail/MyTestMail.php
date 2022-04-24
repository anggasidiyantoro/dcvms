<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Request Visitor Data Center Technovillage')
                    ->view('emails.myTestMail')
                    ->attach('storage/pdf/dcvms1.pdf', [
                        'as' => 'SDI-Biznet Data Center Authorization Form - 06042022.pdf',
                        'mime' => 'application/pdf',
                    ]);
    }
}
