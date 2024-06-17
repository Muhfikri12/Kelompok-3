<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDesa extends Model

{
    use HasFactory;
    protected $fillable = [
        'content_misi',
        'content_visi',
        'alamat',
        'about_us',
        'sejarah',
        'icon_link',
        'yt_link',
        'fb_link',
        'wa_link',
        'ig_link'
    ];
}
