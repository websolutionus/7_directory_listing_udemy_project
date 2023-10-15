<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    function location() : BelongsTo {
        return $this->belongsTo(Location::class);
    }
}
