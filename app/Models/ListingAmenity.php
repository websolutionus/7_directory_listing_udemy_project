<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListingAmenity extends Model
{
    use HasFactory;

    function amenity() : BelongsTo {
        return $this->belongsTo(Amenity::class, 'amenity_id', 'id');
    }
}
