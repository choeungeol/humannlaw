<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktype2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktypes2', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->string('sworktime')->nullable();
            $table->string('eworktime')->nullable();
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

        Schema::create('worktypes2_calc', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('mtotal')->nullable();   //1개월 소정근로시간
            $table->string('mover')->nullable();   //1개월 연장근무시간
            $table->string('mnight')->nullable();   //1개월 야간근무시간
            $table->string('mbreak')->nullable();    //1개월 주휴부여시간
            $table->string('mwbt')->nullable();     //1개월 연차부여시간
            $table->string('total')->nullable();    //총 근로시간
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
        Schema::drop('worktypes2');
        Schema::drop('worktypes2_calc');
    }
}
