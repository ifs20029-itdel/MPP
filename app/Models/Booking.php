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
        'start_time',
        'end_time',
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

    public function getDurationAttribute()
    {
        $start = strtotime($this->start_time);
        $end = strtotime($this->end_time);
        $total = $end - $start;
        $hours = floor($total / 3600);
        $minutes = floor(($total / 60) % 60);
        $seconds = $total % 60;
        return $hours . ' jam ' . $minutes . ' menit ' . $seconds . ' detik';
    }
}
