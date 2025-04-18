<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class VendorOtpVerificationMail extends Mailable
{
    public $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->subject('Your OTP for Vendor Email Verification')
                    ->view('emails.vendor-otp-verification');  // Make sure to create this view
    }
}
