<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuideMail extends Mailable
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

         return $this->subject('Guide Me Request From '.ucfirst($this->contact->input('name')) )
                    ->to($user->email, 'Admin')
                    ->replyTo($this->contact->input('email'), ucfirst($this->contact->input('name')))
                    ->markdown('email.guidemail',['contact'=>$this->contact]);
    }
}
