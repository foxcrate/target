<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'hits',
        'seen',
        'keywords',
        'image',
        'status',
        'duration_weeks',
        'start_date',
        'end_date',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'ad_categories');
    }

    public function categories_names(){

        $all_categories = $this->categories;
        $categories_names= [];

        foreach( $all_categories as $category ){
            array_push( $categories_names , $category->name );
        }

        $categories_names = implode( "،" , $categories_names );

        return $categories_names;
    }

}
