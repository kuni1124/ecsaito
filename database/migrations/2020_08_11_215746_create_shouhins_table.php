<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShouhinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shouhins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
           
            $table->INT('street_address');
            $table->Integer('postal_code');
            $table->foreign('user_id');
            $table->string('name');
            $table->bigInteger('tel_number');
            $table->bigIncrements('item_number_id');
            $table->Integer('number');
            $table->string('contact');
            $table->DATETIME('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shouhins');
    }
}
