<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'company_id',
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

}
