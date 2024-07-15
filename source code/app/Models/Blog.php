<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    function category() : BelongsTo {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }

    function author() : BelongsTo {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
    function comments() : HasMany {
        return $this->hasMany(BlogComment::class, 'blog_id', 'id')->where('status', 1)->orderBy('id', 'DESC');
    }
}
