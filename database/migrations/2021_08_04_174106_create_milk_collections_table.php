<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilkCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milk_collections', function (Blueprint $table) {
            $table->id();
            // $table->integer('Addcow_id');
            $table->string('collection_ID_No');
            $table->integer('cow_number');
            $table->string('date');
            $table->string('liter');
            $table->string('price_perliter');
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
        Schema::dropIfExists('milk_collections');
    }
}
