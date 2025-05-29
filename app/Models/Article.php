<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'short_description',
        'date',
        'slug',
        'order',

        'seo_title',
        'meta_description',
        'meta_keywords'
    ];
}
