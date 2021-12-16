<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle', 500)->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('title_point_one')->nullable();
            $table->string('subtitle_point_one')->nullable();
            $table->string('icon_point_one')->nullable();
            $table->string('title_point_two')->nullable();
            $table->string('subtitle_point_two')->nullable();   
            $table->string('icon_point_two')->nullable();;  
            $table->string('title_point_three')->nullable();
            $table->string('subtitle_point_three')->nullable();
            $table->string('icon_point_three')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
