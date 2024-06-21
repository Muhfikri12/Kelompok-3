<?php

namespace App\Models;

use App\Models\Demografi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDemografi extends Model
{
    use HasFactory;

    protected $table = "category_demografi";

    protected $guarded = [];

    public function demografis()
    {
        return $this->hasMany(Demografi::class, 'kategori_id');
    }

}
