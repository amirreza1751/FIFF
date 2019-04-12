<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_fa')->nullable();
            $table->string('name_en')->nullable();
            $table->string('length')->nullable();
            $table->string('format')->nullable();
            $table->string('type_fa', 500)->nullable();
            $table->string('type_en', 500)->nullable();
            $table->string('genre_fa', 500)->nullable();
            $table->string('genre_en', 500)->nullable();
            $table->string('product_year_fa')->nullable();
            $table->string('product_year_en')->nullable();
            $table->string('summary_fa', 1500)->nullable();
            $table->text('summary_en')->nullable();
            $table->string('country_fa')->nullable();
            $table->string('country_en')->nullable();
            $table->string('show_subject_fa')->nullable();
            $table->string('show_subject_en')->nullable();
            $table->string('show_date_en')->nullable();
            $table->string('show_date_fa')->nullable();
            $table->text('awards_fa')->nullable();
            $table->text('awards_en')->nullable();
            $table->string('poster', 1000)->nullable();
            $table->string('director_picture', 1000)->nullable();
            $table->text('trailer_link_hls')->nullable();
            $table->text('trailer_link_dash')->nullable();
            $table->string('festival_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
