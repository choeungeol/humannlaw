<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calc_table', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->string('mtotal')->nullable();
            $table->string('mbreak')->nullable();
            $table->string('mover')->nullable();
            $table->string('mnight')->nullable();
            $table->string('mwwork')->nullable();
            $table->string('mwover')->nullable();
            $table->string('mwnight')->nullable();
            $table->string('mwbt')->nullable();
            $table->string('total')->nullable();
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
        Schema::drop('calc_table');
    }
}
