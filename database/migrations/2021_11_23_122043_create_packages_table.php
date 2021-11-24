<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('cost')->nullable();

            $table->text('allowed_company_properties')->nullable();

            $table->integer('allowed_jobs')->nullable();
            $table->integer('allowed_branches')->nullable();
            $table->integer('allowed_ads')->nullable();
            $table->integer('allowed_mboba_ads')->nullable();
            $table->integer('allowed_products')->nullable();
            $table->integer('allowed_events')->nullable();
            $table->integer('allowed_videos')->nullable();
            $table->integer('allowed_images')->nullable();
            $table->integer('allowed_posts')->nullable();
            $table->integer('allowed_files')->nullable();
            $table->integer('allowed_discounts')->nullable();

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
        Schema::dropIfExists('packages');
    }
}
