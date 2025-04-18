<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Notifications\VendorEmailVerification;
use Illuminate\Support\Facades\Request;

class Vendor extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'country', 'port', 'services','verification_token'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($vendor) {
            // Generate a verification token
            $vendor->verification_token = Str::random(60);
            $vendor->save();

            // Send the verification email
            $vendor->notify(new VendorEmailVerification($vendor));
        });
    }

    protected $hidden = [
        'password',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function profile()
    {
        return $this->hasOne(VendorProfile::class);
    }


}

