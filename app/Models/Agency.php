<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'address',
        'phone',
        'email',
        'website',
        'logo',
        'description',
    ];

    public function agencyServices()
    {
        return $this->hasMany(AgencyService::class);
    }
}
