<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'camp_id',
        'image_path',
    ];

    public function camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
}
