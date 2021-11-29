<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->integer('hits')->default(0);
            $table->integer('seen')->default(0);
            $table->text('keywords')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['accepted','pending','refused'])->default('pending');
            $table->integer('duration_weeks')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('ads');
    }
}
