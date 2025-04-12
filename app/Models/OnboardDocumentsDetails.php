<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnboardDocumentsDetails extends Model
{
    protected $appends = ['name'];

    protected $fillable = [
        'onboard_id',
        'onboard_document_id',
        'file_name',
    ];


    public function document()
    {
        return $this->belongsTo(OnboardDocument::class, 'onboard_document_id');
    }




    public function getNameAttribute()
    {
        return $this->document ? $this->document->name : null;
    }
}



