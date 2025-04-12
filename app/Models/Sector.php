<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Sector extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'initial',
        'sector_image',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    

    public function subsectors()
    {
        return $this->hasMany(SubSector::class, 'sector_id');
    }

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        $folderName = 'sector_images';
        return $this->sector_image ? asset("assets/$folderName/" . $this->sector_image) : null;
    }



}
