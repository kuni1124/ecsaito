<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShouhinhyousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shouhinhyous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('price');          
            $table->Integer('user_id');
            $table->string('content');
            $table->Integer('item_number_id');
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
        Schema::dropIfExists('shouhinhyous');
    }
}
