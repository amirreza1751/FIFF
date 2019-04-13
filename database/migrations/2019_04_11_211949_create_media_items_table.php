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
            $table->string('title_fa', 500)->nullable();
            $table->string('title_en', 500)->nullable();
            $table->text('description_fa')->nullable();
            $table->text('description_en')->nullable();
            $table->string('link_hls', 1000)->nullable();
            $table->string('link_dash', 1000)->nullable();
            $table->string('pic1', 500)->nullable();
            $table->string('pic2', 500)->nullable();
            $table->string('type', 500)->nullable();
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
        Schema::dropIfExists('media_items');
    }
}
