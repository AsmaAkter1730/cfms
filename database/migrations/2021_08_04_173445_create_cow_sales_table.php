<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCowSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cow_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('cow_number');
            $table->foreignId('customer_id')->constrained()->restrictOnDelete();
            $table->integer('paidamount');
            $table->string('amount');
            $table->string('date');
            $table->string('remarks');
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
        Schema::dropIfExists('cow_sales');
    }
}
