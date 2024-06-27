<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cour extends Model
{
    use HasFactory;

    public function professeur(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
