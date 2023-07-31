<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriticSuggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'agency_id',
        'message',
    ];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
