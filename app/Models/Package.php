<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'cost',
        'allowed_company_properties',
        'allowed_jobs',
        'allowed_branches',
        'allowed_ads',
        'allowed_mboba_ads',
        'allowed_products',
        'allowed_events',
        'allowed_videos',
        'allowed_images',
        'allowed_posts',
        'allowed_files',
        'allowed_discounts',
    ];

    public function users(){
        return $this->hasMany('App\Models\User');
    }

}
