<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;

    public function __construct($request)
    {
        $this->contact = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = User::where('role_id','=',1)->first();
         return $this->subject($this->contact->input('subject'))
                    ->to($user->email, 'Admin')
                    ->replyTo($this->contact->input('email'), ucfirst($this->contact->input('name')))
                    ->markdown('email.contactemail',['contact'=>$this->contact]);
    }
}
