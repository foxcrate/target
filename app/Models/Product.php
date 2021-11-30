<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'abstract_description',
        'full_description',
        'price',
        'company_id',
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

}
