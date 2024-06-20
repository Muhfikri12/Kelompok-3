<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'demografi';

    public function category ()
    {
        return $this->belongsTo(CategoryDemografi::class, 'kategori_id');
    }

}
