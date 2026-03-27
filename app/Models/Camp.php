<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Camp extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'presenter',
        'youtube_url',
        'date',
        'time',
        'content',
        'status',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(CampImage::class);
    }
}
