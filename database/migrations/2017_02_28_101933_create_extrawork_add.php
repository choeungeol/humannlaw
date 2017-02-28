<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraworkAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraworkadds', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');
            $table->string('extrawork_title');
            $table->string('use_date');
            $table->boolean('pay_apply')->default(0);
            $table->string('add_time');
            $table->string('add_pay');
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
        Schema::drop('extraworkadds');
    }
}
