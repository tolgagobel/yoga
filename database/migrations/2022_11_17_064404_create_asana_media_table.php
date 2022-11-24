<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsanaMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asana_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asana_id');
            $table->unsignedBigInteger('media_id');
            $table->timestamps();

            $table->foreign('asana_id')->references('id')->on('asanas')->onDelete('cascade');
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asana_media');
    }
}
