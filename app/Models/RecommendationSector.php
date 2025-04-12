<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendationSector extends Model
{

    protected $appends = ['name'];

    protected $fillable = [
        'recommendation_id',
        'sector_id',
        'sub_sector_id',
        'is_area_interest',
        
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }

    public function getNameAttribute()
    {
        return $this->sector->name;
    }


    public function subsectors()
    {
        return $this->hasMany(SubSector::class, 'sector_id');
    }

    public function area_interest()
    {
        return $this->hasMany(RecommendationSector::class, 'recommendation_id','id')->where('is_area_interest',1);
    }










}
