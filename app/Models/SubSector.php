<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSector extends Model
{


    protected $fillable = [
        'sector_id',
        'name',
        'initial',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function sector()
    {
          return $this->belongsTo(Sector::class, 'sector_id');
    }
}
