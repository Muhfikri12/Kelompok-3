<?php

namespace App\Models;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureOrg extends Model
{
    use HasFactory;

    protected $table = 'struktur_org';

    protected $guarded = [];


    public function jabatan () {
        return $this->belongsTo(Jabatan::class, 'position_id');
    }

    public function parent () {
        return $this->belongsTo(StructureOrg::class, 'parent_id');
    }

    public function childs () {
        return $this->hasMany(StructureOrg::class, 'parent_id');
    }
}
