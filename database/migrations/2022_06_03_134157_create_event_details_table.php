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
        Schema::create('event_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('venue_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('parking')->nullable();
            $table->string('event_name')->nullable();
            $table->date('event_date')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('event_type')->nullable();
            $table->integer('no_guest')->nullable();
            $table->string('event_address')->nullable();
            $table->string('lead_source')->nullable();
            $table->text('note')->nullable();
            $table->string('city')->nullable();
            $table->text('instruction')->nullable();
            $table->string('email2')->nullable();
            $table->string('partner_name')->nullable();
            $table->string('partner_number')->nullable();
            $table->string('partner_email')->nullable();
            $table->string('package')->nullable();
            $table->string('custom_package_name')->nullable();
            $table->integer('custom_package_amount')->nullable();
            $table->text('custom_package_desc')->nullable();
            $table->text('custom_package_note')->nullable();
            $table->tinyInteger('package_offer')->default(0);
            $table->integer('assign_dj')->nullable();
            $table->tinyInteger('is_delete')->default(0);
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
        Schema::dropIfExists('event_details');
    }
};
