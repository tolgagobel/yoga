<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsanaLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asana_labels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asana_id')->default(0);
            $table->unsignedBigInteger('label_id')->default(0);
            $table->timestamps();

            $table->foreign('asana_id')->references('id')->on('asanas')->onDelete('cascade');
            $table->foreign('label_id')->references('id')->on('labels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asana_labels');
    }
}
