<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function companies(){
        return $this->hasMany('App\Models\Company');
    }

    public function ads(){
        return $this->belongsToMany(Ad::class,'ad_categories');
    }

}
