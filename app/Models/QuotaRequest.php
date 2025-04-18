<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotaRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',  
        'user_id',      
        'vessel_name',
        'voyage_number',
        'imo_number',
        'eta',
        'agents',
        'request_type',
        'service_description',
        'tob_cleaning',
        'equipment_description',
        'last_5_cargo',
        'hold_images',
        'iframe_code',
        'company_name',
        'company_logo',
        'company_address',
        'form_filler_name',
        'email',
        'mobile',
        'status',
    ];
}
