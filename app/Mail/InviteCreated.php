<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Invite;

class InviteCreated extends Mailable
{
    use Queueable, SerializesModels;
  public function __construct(Invite $invite)
  {
      $this->invite = $invite;
  }


    public function build(){
      // dd($this->invite);

        return $this->from('miguelreaf@gmail.com')
                    ->view('emails.invite')->with('invite', $this->invite);
    }
}
