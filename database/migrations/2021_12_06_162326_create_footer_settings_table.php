<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string('footer_title');
            $table->string('footer_address');
            $table->string('footer_phone');
            $table->string('footer_email');
            $table->string('footer_copyright');
            $table->string('footer_designed');
            $table->string('footer_twitter');
            $table->string('footer_facebook');
            $table->string('footer_instagram');
            $table->string('footer_youtube');
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
        Schema::dropIfExists('footer_settings');
    }
}
