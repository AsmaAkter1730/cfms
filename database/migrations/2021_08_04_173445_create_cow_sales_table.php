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
            $table->string('Invoice_no');
            $table->string('cow_number');
            $table->string('cus_name');
            $table->string('email');
            $table->string('cus_mobile');
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
