<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path', 500)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('workshop_pictures', function (Blueprint $table) {
            $table->unsignedInteger('workshop_id');
            $table->foreign('workshop_id')->references('id')->on('workshops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_pictures');
    }
}
