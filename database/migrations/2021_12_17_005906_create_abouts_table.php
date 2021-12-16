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
            $table->string('title');
            $table->string('subtitle', 500);
            $table->string('title_point_one');
            $table->string('subtitle_point_one');
            $table->string('icon_point_one');
            $table->string('title_point_two');
            $table->string('subtitle_point_two');
            $table->string('icon_point_two');  
            $table->string('title_point_three');
            $table->string('subtitle_point_three');
            $table->string('icon_point_three');
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
