<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'task';

    protected $guarded = [];


    public function jabatan() {
        return $this->belongsTo(Jabatan::class,'position_id');
    }

}
