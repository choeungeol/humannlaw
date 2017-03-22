<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPayinfoPreviousMonthpay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payinfos', function(Blueprint $table)
        {
            $table->string('pre_month_price')->nullable()->after('hour_pay');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payinfos', function(Blueprint $table)
        {

            $table->dropColumn('pre_month_price');

        });
    }
}
