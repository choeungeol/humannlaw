<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payinfos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');    //사원 id
            $table->string('paymonth')->nullable(); //월 급여액
            $table->boolean('non_taxable')->default(0); //생산직 비과세 여부
            $table->boolean('tax_deduction')->default(0); //일용직 세액공제 여부
            $table->string('overseas_taxable')->nullable('없음'); //국외근로비과세 여부
            $table->string('hour_pay')->nullable(); //통상시급
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
        Schema::drop('payinfos');
    }
}
