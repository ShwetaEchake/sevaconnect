<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = [
        'seva_id',
        'org_name',
        'organization_type_id',
        //'sector_id',
        'work_place',
        'address',
        'phone_no',
        'org_contact_name',
        'org_contact_no',
        'is_connected',
        'contact_no',
        'is_visited',
        'opinion',

        'user_type',
        'managing',
        'contact_address',
        'contact_pincode',
        'area',
        'email',
        'year',
        'vision_induction',
        'current',
        'mobile_no',
        'name',
        'area_interest',
        'area_cause',
        'social_org',
        'off_address',
        'off_pincode',
        'comfortable_call',
        'induction_cause',
        'time_date',
        'ngo_type_id',
        

        'created_by',
        'updated_by',
        'deleted_by',

    ];

    public function orgType()
    {
        return $this->belongsTo(OrganizationType::class, 'organization_type_id', 'id');
    }

    public function sectors()
    {
        return $this->hasMany(RecommendationSector::class, 'recommendation_id','id')->where('is_area_interest',0);
    }

    public function area_interests()
    {
        return $this->hasMany(RecommendationSector::class, 'recommendation_id','id')->where('is_area_interest',1);
    }

   


}
