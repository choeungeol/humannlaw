<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktype1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktypes1', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->integer('part')->nullable();
            $table->integer('change')->nullable();
            $table->string('first_sworktime')->nullable();
            $table->string('first_eworktime')->nullable();
            $table->string('second_sworktime')->nullable();
            $table->string('second_eworktime')->nullable();
            $table->string('third_sworktime')->nullable();
            $table->string('third_eworktime')->nullable();
            $table->string('fourth_sworktime')->nullable();
            $table->string('fourth_eworktime')->nullable();
            $table->string('fifth_sworktime')->nullable();
            $table->string('fifth_eworktime')->nullable();
            $table->boolean('nextdaytime')->nullable()->default(0);
            $table->string('first_sbtime1')->nullable();
            $table->string('first_ebtime1')->nullable();
            $table->string('second_sbtime1')->nullable();
            $table->string('second_ebtime1')->nullable();
            $table->string('third_sbtime1')->nullable();
            $table->string('third_ebtime1')->nullable();
            $table->string('fourth_sbtime1')->nullable();
            $table->string('fourth_ebtime1')->nullable();
            $table->string('fifth_sbtime1')->nullable();
            $table->string('fifth_ebtime1')->nullable();
            $table->string('first_sbtime2')->nullable();
            $table->string('first_ebtime2')->nullable();
            $table->string('second_sbtime2')->nullable();
            $table->string('second_ebtime2')->nullable();
            $table->string('third_sbtime2')->nullable();
            $table->string('third_ebtime2')->nullable();
            $table->string('fourth_sbtime2')->nullable();
            $table->string('fourth_ebtime2')->nullable();
            $table->string('fifth_sbtime2')->nullable();
            $table->string('fifth_ebtime2')->nullable();
            $table->integer('sortnum');
            $table->timestamps();
        });

        Schema::create('worktypes1_calc', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('mtotal')->nullable();   //1개월 소정근로시간
            $table->string('mover')->nullable();   //1개월 연장근무시간
            $table->string('mnight')->nullable();   //1개월 야간근무시간
            $table->string('mbreak')->nullable();    //1개월 주휴수당
            $table->string('mwbt')->nullable();     //1개월 연차수당
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
        Schema::drop('worktypes1');
        Schema::drop('worktypes1_calc');
    }
}
