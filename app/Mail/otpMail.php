<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class otpMail extends Mailable
{
    var $otp,$email,$name;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp,$email,$name)
    {
        //
        $this->otp=$otp;
        $this->email=$email;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('HumchaleViews.OTPMailDesign',
            ['otp' => $this->otp])->
        from('humchaleapp@gmail.com','Humchale App')->
        to($this->email,$this->name)->
        subject('HUMCHALE OTP | NO reply');
    }
}
