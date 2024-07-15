<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    function listing() : BelongsTo {
        return $this->belongsTo(Listing::class);
    }

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
