<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilkSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milk_sales', function (Blueprint $table) {
            $table->id();
            $table->string('collection_ID_No');
            $table->string('cutomer_name');
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
        Schema::dropIfExists('milk_sales');
    }
}
