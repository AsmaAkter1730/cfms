<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('feed_id');
            $table->integer('cow_number');
            $table->string('date');
            $table->string('Remarks');
            $table->string('Quantity');
            $table->string('Feed_time');
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
        Schema::dropIfExists('feed_monitorings');
    }
}
