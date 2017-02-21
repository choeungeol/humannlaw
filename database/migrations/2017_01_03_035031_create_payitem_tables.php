<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayitemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payitems1', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('paycalc');                      //급여계산기준
            $table->string('probaion');                     //수습율
            $table->string('is_severance_pay');             //퇴직금 대상
            $table->string('is_taxfree');                    //비과세여부
            $table->boolean('in_basicpay')->default(0);                 //기본급 포함
            $table->boolean('use_this')->default(0);             //사용
            $table->timestamps();
        });     //통상임금

        Schema::create('payitems2', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('paycalc');                      //급여계산기준
            $table->string('probaion');                     //수습율
            $table->string('is_severance_pay');             //퇴직금 대상
            $table->string('is_taxfree');                    //비과세여부
            $table->boolean('use_this')->default(0);             //사용
            $table->timestamps();
        });     //법정수당

        Schema::create('payitems3', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('paycalc');                      //급여계산기준
            $table->string('probaion');                     //수습율
            $table->string('is_severance_pay');             //퇴직금 대상
            $table->string('is_taxfree');                    //비과세여부
            $table->boolean('use_this')->default(0);             //사용
            $table->timestamps();
        });     //복리후생

        Schema::create('payitems4', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('paycalc');                      //급여계산기준
            $table->string('probaion');                     //수습율
            $table->string('is_severance_pay');             //퇴직금 대상
            $table->string('is_taxfree');                    //비과세여부
            $table->boolean('use_this')->default(0);             //사용
            $table->timestamps();
        });     //약정수당
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payitems1');
        Schema::drop('payitems2');
        Schema::drop('payitems3');
        Schema::drop('payitems4');
    }
}
