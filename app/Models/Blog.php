<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract_content',
        'full_content',
        'image',
        'company_id',
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}
