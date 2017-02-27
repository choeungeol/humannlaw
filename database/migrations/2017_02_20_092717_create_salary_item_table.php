<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_items1', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');    //사원 id
            $table->integer('payitem_id')->nullable();  //통상임금 ID
            $table->string('data')->nullable();    //통상임금 명
            $table->timestamps();

        });

        Schema::create('salary_items2', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');    //사원 id
            $table->integer('payitem_id')->nullable();  //법정수당 ID
            $table->string('data')->nullable();    //법정수당 명
            $table->timestamps();

        });

        Schema::create('salary_items3', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');    //사원 id
            $table->integer('payitem_id')->nullable();  //복리후생 ID
            $table->string('data')->nullable();    //복리후생 명
            $table->timestamps();

        });

        Schema::create('salary_items4', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');    //사원 id
            $table->integer('payitem_id')->nullable();  //약정수당 ID
            $table->string('data')->nullable();    //약정수당 명
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
        Schema::drop('salary_items1');
        Schema::drop('salary_items2');
        Schema::drop('salary_items3');
        Schema::drop('salary_items4');
    }
}
