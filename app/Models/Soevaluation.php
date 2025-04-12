<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Soevaluation extends Model
{
    use HasFactory;

    protected $table = 'soevaluations';

    protected $fillable = [
        'id ',
        'eva_name',
        'mem_name',
        'mem_seva',
        'eva_org',
        'org_type',
        'eva_address',
        'eval_sector',
        'eva_incharge',
        'eva_in_no',
        'eva_year',
        'eva_letter',
        'eva_documents',
        'eva_gap',
        'eva_existing',
        'eva_up',
        'eva_benefeed',
        'eve_comments',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function sectors()
    {
        return $this->hasMany(SoevaluationSectors::class, 'soevaluation_id','id');
    }

    public function orgType()
    {
        return $this->belongsTo(OrganizationType::class, 'organization_type_id', 'id');
    }


    public function documents()
    {
        return $this->hasMany(SoevaluationDocList::class, 'soevaluation_documents_id','id');
    }





}
