<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    use HasFactory;

    public function eleve(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cours(): BelongsTo
    {
        return $this->belongsTo(Cour::class);
    }
}
