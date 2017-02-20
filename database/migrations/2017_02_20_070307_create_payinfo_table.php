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
            $table->string('paymonth'); //월 급여액
            $table->boolean('non_taxable'); //생산직 비과세 여부
            $table->boolean('tax_deduction'); //일용직 세액공제 여부
            $table->string('overseas_taxable'); //국외근로비과세 여부
            $table->string('hour_pay'); //통상시급
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
