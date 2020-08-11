<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShouhingazousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shouhingazous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->Integer('item_number_id');
            $table->varchar(65535);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shouhingazous');
    }
}
