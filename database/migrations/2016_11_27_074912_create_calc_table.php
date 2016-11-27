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
            $table->integer('mtotal')->nullable();
            $table->integer('mbreak')->nullable();
            $table->integer('mover')->nullable();
            $table->integer('mnight')->nullable();
            $table->integer('mwwork')->nullable();
            $table->integer('mwover')->nullable();
            $table->integer('mwnight')->nullable();
            $table->integer('mwbt')->nullable();
            $table->integer('total')->nullable();
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
