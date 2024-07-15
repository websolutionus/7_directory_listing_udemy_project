<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory, SoftDeletes;

    function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    function location() : BelongsTo {
        return $this->belongsTo(Location::class);
    }

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    function gallery() : HasMany {
        return $this->hasMany(ListingImageGallery::class, 'listing_id', 'id');
    }

    function amenities() : HasMany {
        return $this->hasMany(ListingAmenity::class, 'listing_id', 'id');
    }

    function videoGallery() : HasMany {
        return $this->hasMany(ListingVideoGallery::class, 'listing_id', 'id');
    }

    function schedules() : HasMany {
        return $this->hasMany(ListingSchedule::class, 'listing_id', 'id');
    }

    function reviews() : HasMany {
        return $this->hasMany(Review::class);
    }
}
