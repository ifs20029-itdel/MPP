<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'agency_service_id',
        'name',
        'whatsapp',
        'date',
        'queue_number',
        'status',
    ];

    public function agencyService()
    {
        return $this->belongsTo(AgencyService::class);
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}
