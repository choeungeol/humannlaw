<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktype4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktypes4', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->string('sworktime')->nullable();
            $table->string('eworktime')->nullable();
            $table->boolean('nextdaytime')->nullable()->default(0);
            $table->string('sbtime1')->nullable();
            $table->string('ebtime1')->nullable();
            $table->string('sbtime2')->nullable();
            $table->string('ebtime2')->nullable();
            $table->string('sbtime3')->nullable();
            $table->string('ebtime3')->nullable();
            $table->string('sbtime4')->nullable();
            $table->string('ebtime4')->nullable();
            $table->integer('sortnum');
            $table->timestamps();

        });

        Schema::create('worktypes4_calc', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->string('mtotal')->nullable();    //소정근로시간
            $table->string('mover')->nullable();    //연장근로시간
            $table->string('mnight')->nullable();   //야간근로시간
            $table->string('mwwork')->nullable();   //휴일수당
            $table->string('mwover')->nullable();   //휴일연장
            $table->string('mwnight')->nullable();  //휴일야간
            $table->string('mbreak')->nullable();   //주휴일
            $table->string('mwbt')->nullable();     //연차수당
            $table->string('daypay')->nullable();
            $table->string('workday')->nullable();
            $table->string('total')->nullable();    //종합
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
        Schema::drop('worktypes4');
        Schema::drop('worktypes4_calc');
    }
}
