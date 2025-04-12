<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Charity extends Model
{
    use HasFactory;

    protected $table = 'charity';



    protected $fillable = [
        'id ',
        'charity_name',
        'charity_image',
        'charity_details',
        'created_at',
        'updated_at',
    ];
}
