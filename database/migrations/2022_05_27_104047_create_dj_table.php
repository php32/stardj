<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dj', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nick_name');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->text('profile_picture')->nullable();
            $table->text('logo')->nullable();
            $table->text('about_me')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('address')->nullable();
            $table->text('web_site')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('spotify')->nullable();
            $table->text('youtube')->nullable();
            $table->text('soundCloud')->nullable();
            $table->text('tiktok')->nullable();
            $table->string('password');

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
        Schema::dropIfExists('dj');
    }
};
