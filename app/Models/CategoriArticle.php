<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriArticle extends Model
{
    use HasFactory;

    protected $table = "category_article";

    protected $guarded = [];
}
