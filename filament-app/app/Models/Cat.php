<?php

namespace App\Models;

use App\Breed;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Guarded([])]
class Cat extends Model
{
    use HasFactory;

    protected $casts = [
        'breed' => Breed::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // php artisan filament:install --panels
    // art filament:resource Cat --generate --embed-schemas
}
