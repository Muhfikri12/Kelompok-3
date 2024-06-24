<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'position';

    protected $guarded = [];

    public function tasks() {
        return $this->hasMany(Tugas::class,'position_id');
    }

    public function Staffs()
    {
        return $this->hasMany(Tugas::class,'position_id');
    }
}
