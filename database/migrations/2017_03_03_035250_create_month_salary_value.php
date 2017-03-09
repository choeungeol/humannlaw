<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthSalaryValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthsalaryvalues', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');
            $table->string('normal_wage');
            $table->string('statutory_allowance');
            $table->string('benefits');
            $table->string('commit_allowance');
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
        Schema::drop('monthsalaryvalues');
    }
}
