<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Onboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'onboard_seva',
        'name',
        'onboard_org_type',
        //'sector_id',
        'onboard_trustee',
        'onboard_name',
        'onboard_mobile',
        'onboard_address',
        'area_name',
        'onboard_email',
        'onboard_year',
        //'onboard_sector',
        //'onboard_subsector',
        'vision_name',
        'current_name',
        'onboard_format',
        'current_benf',
        'sevakarar',
        'onboard_achiev',
        'onboard_future',
        'onboard_specific',
        'certificate',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
