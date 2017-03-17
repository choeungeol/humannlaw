<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMonthSalaryValueTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monthsalaryvalues', function(Blueprint $table)
        {
            $table->string('month_price')->nullable()->after('commit_allowance');
            $table->string('none_tax_price')->nullable()->after('commit_allowance');
            $table->string('total_price')->nullable()->after('commit_allowance');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monthsalaryvalues', function(Blueprint $table)
        {

            $table->dropColumn(array('month_price','none_tax_price','total_price'));

        });
    }
}
