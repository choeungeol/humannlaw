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
            $table->mediumText('normal_wage');
            $table->mediumText('statutory_allowance');
            $table->mediumText('benefits');
            $table->mediumText('commit_allowance');
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
