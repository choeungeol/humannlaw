<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktype3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktypes3', function(Blueprint $table){
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

        Schema::create('worktypes3_calc', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('mtotal')->nullable();   //1개월 소정근로시간
            $table->string('mnight')->nullable();   //1개월 야간근무시간
            $table->string('mwbt')->nullable();     //연차시간
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
        Schema::drop('worktypes3');
        Schema::drop('worktypes3_calc');
    }
}
