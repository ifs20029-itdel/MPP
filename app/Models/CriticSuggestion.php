<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriticSuggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'booking_id',
        'message',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
