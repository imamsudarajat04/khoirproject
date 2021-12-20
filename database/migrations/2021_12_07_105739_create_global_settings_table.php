<?php

use App\GlobalSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_settings', function (Blueprint $table) {
            $table->id();
            $table->string('navbar_title')->default('Khoir Project');
            $table->string('primary_color')->default('#2fa13a');
            $table->string('secondary_color')->default('#999999');
            $table->string('navbar_color')->default('#fff');
            $table->integer('font_size_title')->default(48);
            $table->integer('font_size_subtitle')->default(24);
            $table->string('page_banner')->nullable();
            $table->string('page_banner_about')->nullable();
            $table->string('page_banner_testimonials')->nullable();
            $table->string('title_profile')->nullable();
            $table->string('subtitle_profile')->nullable();
            $table->string('icon_profile_one')->nullable();
            $table->string('title_profile_one')->nullable();
            $table->string('subtitle_profile_one')->nullable();
            $table->string('icon_profile_two')->nullable();
            $table->string('title_profile_two')->nullable();
            $table->string('subtitle_profile_two')->nullable();
            $table->string('icon_profile_three')->nullable();
            $table->string('title_profile_three')->nullable();
            $table->string('subtitle_profile_three')->nullable();
            $table->string('subtitle_services')->nullable();
            $table->string('subtitle_team')->nullable();
            $table->string('subtitle_faq')->nullable();
            $table->string('subtitle_contact')->nullable();
            $table->timestamps();
        });

        GlobalSetting::create();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_settings');
    }
}
