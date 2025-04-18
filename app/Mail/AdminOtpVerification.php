<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminOtpVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $admin;

    /**
     * Create a new message instance.
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Your OTP Code')
                    ->view('emails.admin-otp')
                    ->with([
                        'otp' => $this->admin->otp,
                        'name' => $this->admin->name,
                    ]);
    }
}
