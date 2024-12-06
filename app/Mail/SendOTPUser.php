<?php

namespace App\Mail;


use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOTPUser extends Mailable
{
    use SerializesModels;

    public $otp;

    /**
     * Create a new message instance.
     *
     * @param string $otp
     * @return void
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your OTP for Doctorwala Sign Up')
                    ->view('emails.user-email');
    }
}
