<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('profile_pic')->nullable();
            $table->text('about_me')->nullable();
            $table->string('display_name', 30)->nullable();
            $table->string('phone_no', 60)->nullable();
            $table->json('social_links');
            $table->json('contact_options');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('city_code', 10)->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('country', 60)->nullable();
            $table->string('iso_code', 10)->nullable();
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
        Schema::drop('profiles');
    }
}
