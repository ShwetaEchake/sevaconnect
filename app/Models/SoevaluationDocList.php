<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoevaluationDocList extends Model
{

    // protected $appends = ['name'];

    protected $fillable = [
        'soevaluation_id',
        'soevaluation_documents_id',
    ];

    public function document()
    {
        return $this->belongsTo(SoevaluationDocuments::class, 'soevaluation_documents_id', 'id');
    }

    public function getNameAttribute()
    {
        return $this->document->name;
    }
}
