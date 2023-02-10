<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 60);
            $table->string('departureStation', 60);
            $table->string('arrivalStation', 60);
            $table->dateTime('departureTime');
            $table->dateTime('arrivalTime');
            $table->string('codTrain', 50);
            $table->tinyInteger('numberCarriages');
            $table->boolean('inTime');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
};
