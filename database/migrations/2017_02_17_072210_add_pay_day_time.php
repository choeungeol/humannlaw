<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPayDayTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paydays', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('calc_price');
            $table->boolean('is_check')->default(0);
            $table->timestamps();

        });

        Schema::create('paytimes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('calc_price');
            $table->string('price');
            $table->boolean('is_check')->default(0);
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
        Schema::drop('paydays');
        Schema::drop('paytimes');
    }
}
