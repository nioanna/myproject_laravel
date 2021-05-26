<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentialBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residential_buildings', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('city');
            $table->double('square_footage');
            $table->double('price');
            $table->double('rooms_number');
            $table->double('parking_spaces');
            $table->string('category');
            $table->integer('user_id');
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
        Schema::dropIfExists('residential_buildings');
    }
}
