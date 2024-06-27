<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $guarded = [];

    protected $casts = [ 
        'event_date' => 'date'
    ];
}
