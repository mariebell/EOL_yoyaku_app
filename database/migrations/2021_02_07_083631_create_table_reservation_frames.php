<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservationFrames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_frames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->datetime('start_datetime');
            $table->datetime('end_datetime');
            $table->string('span');
            $table->integer('workers_id');
            $table->integer('unit_id');
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
        Schema::dropIfExists('reservation_frames');
    }
}
