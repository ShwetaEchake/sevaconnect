<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnboardSectorsSubsectos extends Model
{
    protected $appends = ['name'];

    protected $fillable = [
        'onboardids_id',
        'sector_id',
        'subsector_id',
    ];
}
