<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFacilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('administrator_id');
            $table->string('name');
            $table->string('phone');
            $table->integer('prefecture_id');
            $table->integer('municipality_id');
            $table->string('stations_id'); // multiple stations
            $table->string('address');
            $table->string('email');
            $table->string('url');
            $table->string('open_weekdays');
            $table->integer('number_of_unit');
            $table->date('established');
            $table->boolean('delete_flag');
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
        Schema::dropIfExists('facilities');
    }
}
