<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'demo_url',
        'github_url',
        'tech_stack',
        'order',
        'visible',
        'featured',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'visible' => 'boolean',
        'featured' => 'boolean',
    ];
}
