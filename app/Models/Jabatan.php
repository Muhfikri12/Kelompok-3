<?php

namespace App\Models;

use App\Models\PerangkatDesa;
use App\Models\Tugas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'position';

    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Tugas::class, 'id');
    }

    public function Staffs()
    {
        return $this->hasMany(PerangkatDesa::class,'position_id');
    }
}
