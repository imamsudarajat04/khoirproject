<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_settings', function (Blueprint $table) {
            $table->id();
            // $table->string('header_name')->default('Khoir Project');
            $table->string('header_title');
            $table->string('header_subtitle');
            $table->string('header_button_text');
            $table->string('header_email')->default('abc@example.com');
            $table->string('header_phone')->default('+62 812-345-6789');
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
        Schema::dropIfExists('homepage_settings');
    }
}
