<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class VendorEmailVerification extends Notification
{
    public $vendor;

    public function __construct($vendor)
    {
        $this->vendor = $vendor;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = route('vendor.verify', ['id' => $this->vendor->id, 'token' => $this->vendor->verification_token]);

        return (new MailMessage)
                    ->line('Please click the button below to verify your email address.')
                    ->action('Verify Email', $url)
                    ->line('Thank you for using our application!');
    }
}
