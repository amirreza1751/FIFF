<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieAwardsPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_awards_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path', 500)->nullable();
            $table->timestamps();
        });
        Schema::table('movie_awards_pictures', function (Blueprint $table) {
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_awards_pictures');
    }
}
