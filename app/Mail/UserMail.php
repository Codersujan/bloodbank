<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Stmt\Global_;

use function PHPUnit\Framework\returnValue;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public function __construct( $name)
    {
        $this->name=$name;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'User Registration Confirm Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    // public function content()
    // {
    //     // return new Content(
    //     //  view: 'email.UserMail',
    //     // );
    //     // Global $name;
    //     // return view('email.UserMail')->with('name',$name);
    //     return $this->view('email.UserMail')
    //     ->with($this->name);
    // }
    public function build()
    {
        return $this->view('email.UserMail')
        ->with($this->name);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
