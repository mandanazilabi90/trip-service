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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departure_airport_id');
            $table->foreign('departure_airport_id')->references('id')->on('airports');
            $table->unsignedBigInteger('arrival_airport_id');
            $table->foreign('arrival_airport_id')->references('id')->on('airports');
            $table->date('departure_time');
            $table->date('return_time')->nullable();
            $table->enum('type', ['oneway', 'round'])->default('oneway');
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
        Schema::dropIfExists('trips');
    }
};
