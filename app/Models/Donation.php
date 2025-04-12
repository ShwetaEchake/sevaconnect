<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id ',
        'name',
        'description',
        'price',
        'raised',
        'type',
        'created_at',
        'updated_at',
    ];
}
