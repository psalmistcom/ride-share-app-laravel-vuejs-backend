<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'origin' => 'array',
        'destination' => 'array',
        'driiver_location' => 'array',
        'is_started' => 'boolean',
        'is_complete' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
