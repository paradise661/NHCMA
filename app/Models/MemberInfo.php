<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'type',
        'order',
        'description',
        'slug',
    ];
}
