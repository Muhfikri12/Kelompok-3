<?php

namespace App\Models;

use App\Models\CategoriArticle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $guarded = [];

    protected $casts = [
        'event_date' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(CategoriArticle::class);
    }
}
