<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'background',
        'counter_one',
        'counter_title_one',
        'counter_two',
        'counter_title_two',
        'counter_three',
        'counter_title_three',
        'counter_four',
        'counter_title_four',
    ];
}
