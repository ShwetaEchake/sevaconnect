<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connectstories extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'story_date',
        'story_image',
        'story_video',
        'story_summary',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}



