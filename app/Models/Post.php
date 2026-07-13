<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'slug',
        'content',
        'author',
        'regulation_number',
        'regulation_type',
        'regulation_location',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
