<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'mobile_number',
        'whats_number',
        'email',
        'address',
        'image',
        'company_id',
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

}
