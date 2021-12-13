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
            // $table->string('primary_color')->default('#ff5821');
            $table->integer('font_size_title')->default(48);
            $table->integer('font_size_subtitle')->default(24);
            $table->string('page_banner')->nullable();
            $table->string('page_banner_about')->nullable();
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
