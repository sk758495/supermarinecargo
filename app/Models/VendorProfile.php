<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorProfile extends Model
{
    protected $fillable = [
        'vendor_id',
        'title',
        'phone',
        'profile_image',
        'ports',
        'currency',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function getPortsAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }
    
}
