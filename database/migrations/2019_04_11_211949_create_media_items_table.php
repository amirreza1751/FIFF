<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 500)->nullable();
            $table->text('description')->nullable();
            $table->string('link_hls', 1000)->nullable();
            $table->string('link_dash', 1000)->nullable();
            $table->string('pic1', 500)->nullable();
            $table->string('pic2', 500)->nullable();
            $table->string('type', 500)->nullable();
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
        Schema::dropIfExists('media_items');
    }
}
