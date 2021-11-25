<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table="companies";

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'rate',
        'number_of_ratings',
        'category_id',
        'title',
        'slug',
        'country',
        'state',
        'city',
        'locality',
        'postcode',
        'address',
        'latitude',
        'longitude',
        'contact_person',
        'phone_number',
        'mobile_number',
        'tollfree',
        'fax',
        'email',
        'website',
        'linkedin_url',
        'facebook_url',
        'twitter_url',
        'googleplus_url',
        'youtube_url',
        'pinterest_url',
        'instagram_url',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'qrfile',
        'show_address',
        'show_phone',
        'show_email',
        'show_claim',
        'featured',
        'claimed',
        'expires_on',
        'hits',
        'status',
        'keywords',
        'categories_1',
        'categories_2',
        'categories_3',
        'image_1',
        'image_2',
        'image_3',
        'logo',
        'cover',
        'ctf_lite_edition',
        'ctf_business_edition',
        'ctf_developer_edition',
        'whatsapp_number',
        'ceo_number',
        'number_of_employees',
        'general_manager',
        'chairman_number',
        'export_manager_number',
        'purchasing_manager_number',
        'factory_manager_number',
        'sales_manager_number',
        'managing_director_number',
        'number_of_employees_guest',
        'sales_manager_number_guest',
        'factory_manager_number_guest',
        'marketing_manager_number_guest',
        'purchasing_manager_number_guest',
        'managing_director_number_guest',
        'export_manager_number_guest',
        'chairman_number_guest',
        'general_manager_guest',
        'ceo_number_guest',
        'number_of_employees_client',
        'sales_manager_number_client',
        'factory_manager_number_client',
        'marketing_manager_number_client',
        'purchasing_manager_number_client',
        'managing_director_number_client',
        'export_manager_number_client',
        'chairman_number_client',
        'general_manager_client',
        'ceo_number_client',
        'activity',
        'job',
        'job_guest',
        'mobail2',
        'mobail2_guest',
        'chairman_name',
        'chairmanname_guest',
        'general_manager_name',
        'general_manager_name_guest',
        'sales_manager_name',
        'sales_manager_name_guest',
        'factory_manager_name',
        'factory_manager_name_guest',
        'marketing_manager_name_guest',
        'managing_director_name',
        'managing_director_name_guest',
        'purchases_manager_name',
        'purchases_manager_name_guest',
        'export_manager_name',
        'export_manager_name_guest',
        'ceo_name',
        'ceo_name_guest',
        'products_and_services',
        'products_and_services_guest',
        'activity_guest',
        'marketing_manager_name',
        'area',
        'area_guest',
        'since',
        'since_guest',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function pdfs(){
        return $this->hasMany( 'App\Models\Pdf');
    }

    public function images(){
        return $this->hasMany( 'App\Models\Image');
    }

    public function videos(){
        return $this->hasMany( 'App\Models\Video');
    }

}
