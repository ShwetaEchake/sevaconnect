<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoevaluationSectors extends Model
{

    protected $appends = ['name'];

    protected $fillable = [
        'soevaluation_id',
        'sector_id',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }

    public function getNameAttribute()
    {
        return $this->sector->name;
    }




}
