<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Events extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'summary',
        'image',
        'from_date',
        'address',
        'help_name',
        'need_name',
        'skill',
        'space',
        'other',
        'recurrent',
        'to_date',
        'multiple_image',
        'material_type',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $appends = ['image_path','multiple_images_path'];

    public function getImagePathAttribute()
    {
        $folderName = strtolower(str_replace(' ', '_', $this->help_name));
        return $this->image ? asset("assets/$folderName/" . $this->image) : null;
    }

 public function getMultipleImagesPathAttribute()
{
    if (!$this->multiple_image) {
        return [];
    }

    $folderName = 'multiple_'.strtolower(str_replace(' ', '_', $this->help_name));
    $multipleImages = explode(',', $this->multiple_image);
    $imagePaths = [];

    foreach ($multipleImages as $image) {
        $imagePaths[] = asset("assets/$folderName/" . trim($image));
    }
    return $imagePaths;
}


}



