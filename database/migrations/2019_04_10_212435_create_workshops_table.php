<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_fa')->nullable();
            $table->string('subject_en')->nullable();
            $table->string('category_fa')->nullable();
            $table->string('category_en')->nullable();
            $table->string('teacher_name_fa')->nullable();
            $table->string('teacher_name_en')->nullable();
            $table->text('teacher_info_fa')->nullable();
            $table->text('teacher_info_en')->nullable();
            $table->text('link_hls')->nullable();
            $table->text('link_dash')->nullable();
            $table->text('text_fa')->nullable();
            $table->text('text_en')->nullable();
            $table->string('country_fa')->nullable();
            $table->string('country_en')->nullable();
            $table->string('festival_number')->nullable();
            $table->boolean('special')->default(0);
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
        Schema::dropIfExists('workshops');
    }
}
