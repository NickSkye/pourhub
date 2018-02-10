<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSubmission extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;

        // Because Laravel overrides the $message variable in the mailable view.
        $this->data['_message'] = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact', $this->data)
            ->from('nick@wbrandstudio.com')
            ->subject('Carpark Contact Form Submission');
    }
}
