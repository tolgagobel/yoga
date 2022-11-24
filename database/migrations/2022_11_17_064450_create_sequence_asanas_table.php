<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSequenceAsanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequence_asanas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sequence_id')->default(0);
            $table->unsignedBigInteger('asana_id')->default(0);
            $table->string('duration');
            $table->timestamps();

            $table->foreign('sequence_id')->references('id')->on('sequences')->onDelete('cascade');
            $table->foreign('asana_id')->references('id')->on('asanas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sequence_asanas');
    }
}
