<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('gc_country')->nullable();
            $table->text('gc_state')->nullable();
            $table->text('gc_city')->nullable();
            $table->text('gc_locality')->nullable();
            $table->text('postcode')->nullable();
            $table->text('address')->nullable();
            $table->decimal('latitude',11,8)->nullable();
            $table->decimal('longitude',11,8)->nullable();
            $table->text('contact_person')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('mobile_number')->nullable();
            $table->text('tollfree')->nullable();
            $table->text('fax')->nullable();
            $table->text('email')->nullable();
            $table->text('website')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('googleplus_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('pinterest_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('qrfile')->nullable();
            $table->boolean('show_address')->default(0);
            $table->boolean('show_phone')->default(0);
            $table->boolean('show_email')->default(0);
            $table->boolean('show_claim')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('claimed')->default(0);
            $table->text('expires_on')->nullable();
            $table->integer('hits')->nullable();
            $table->text('status')->nullable();
            $table->text('keywords')->nullable();
            $table->text('categories_1')->nullable();
            $table->text('categories_2')->nullable();
            $table->text('categories_3')->nullable();
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('logo')->nullable();
            $table->text('cover')->nullable();
            $table->text('ctf_lite_edition')->nullable();
            $table->text('ctf_business_edition')->nullable();
            $table->text('ctf_developer_edition')->nullable();
            $table->text('whatsapp_number')->nullable();
            $table->text('ceo_number')->nullable();
            $table->text('number_of_employees')->nullable();
            $table->text('general_manager')->nullable();
            $table->text('chairman_number')->nullable();
            $table->text('export_manager_number')->nullable();
            $table->text('purchasing_manager_number')->nullable();
            $table->text('factory_manager_number')->nullable();
            $table->text('sales_manager_number')->nullable();
            $table->text('managing_director_number')->nullable();
            $table->integer('number_of_employees_guest')->nullable();
            $table->text('sales_manager_number_guest')->nullable();
            $table->text('factory_manager_number_guest')->nullable();
            $table->text('marketing_manager_number_guest')->nullable();
            $table->text('purchasing_manager_number_guest')->nullable();
            $table->text('managing_director_number_guest')->nullable();
            $table->text('export_manager_number_guest')->nullable();
            $table->text('chairman_number_guest')->nullable();
            $table->text('general_manager_guest')->nullable();
            $table->text('ceo_number_guest')->nullable();
            $table->text('number_of_employees_client')->nullable();
            $table->text('sales_manager_number_client')->nullable();
            $table->text('factory_manager_number_client')->nullable();
            $table->text('marketing_manager_number_client')->nullable();
            $table->text('purchasing_manager_number_client')->nullable();
            $table->text('managing_director_number_client')->nullable();
            $table->text('export_manager_number_client')->nullable();
            $table->text('chairman_number_client')->nullable();
            $table->text('general_manager_client')->nullable();
            $table->text('ceo_number_client')->nullable();
            $table->text('activity')->nullable();
            $table->text('job')->nullable();
            $table->text('job_guest')->nullable();
            $table->text('mobail2')->nullable();
            $table->text('mobail2_guest')->nullable();
            $table->text('chairman_name')->nullable();
            $table->text('chairmanname_guest')->nullable();
            $table->text('general_manager_name')->nullable();
            $table->text('general_manager_name_guest')->nullable();
            $table->text('sales_manager_name')->nullable();
            $table->text('sales_manager_name_guest')->nullable();
            $table->text('factory_manager_name')->nullable();
            $table->text('factory_manager_name_guest')->nullable();
            $table->text('marketing_manager_name_guest')->nullable();
            $table->text('managing_director_name')->nullable();
            $table->text('managing_director_name_guest')->nullable();
            $table->text('purchases_manager_name')->nullable();
            $table->text('purchases_manager_name_guest')->nullable();
            $table->text('export_manager_name')->nullable();
            $table->text('export_manager_name_guest')->nullable();
            $table->text('ceo_name')->nullable();
            $table->text('ceo_name_guest')->nullable();
            $table->text('products_and_services')->nullable();
            $table->text('products_and_services_guest')->nullable();
            $table->text('activity_guest')->nullable();
            $table->text('marketing_manager_name')->nullable();
            $table->text('area')->nullable();
            $table->text('area_guest')->nullable();
            $table->text('since')->nullable();
            $table->text('since_guest')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
