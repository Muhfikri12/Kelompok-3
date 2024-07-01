<?php

namespace App\Models;

use App\Models\StructureOrg;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    use HasFactory;

    protected $table = "staff";

    protected $guarded = [];


    public function position()
    {
        return $this->belongsTo(Jabatan::class,'position_id');
    }

    public function struktur()
    {
        return $this->hasOne(StructureOrg::class,'staff_id');
    }


}
