<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPayitemUseage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payitems1', function(Blueprint $table)
        {
            $table->boolean('use_this1')->nullable()->default(0)->after('use_this');    //포괄연봉제
            $table->boolean('use_this2')->nullable()->default(0)->after('use_this');    //포괄월급제
            $table->boolean('use_this3')->nullable()->default(0)->after('use_this');    //일당제
        });

        Schema::table('payitems2', function(Blueprint $table)
        {
            $table->boolean('use_this1')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this2')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this3')->nullable()->default(0)->after('use_this');
        });

        Schema::table('payitems3', function(Blueprint $table)
        {
            $table->boolean('use_this1')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this2')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this3')->nullable()->default(0)->after('use_this');
        });

        Schema::table('payitems4', function(Blueprint $table)
        {
            $table->boolean('use_this1')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this2')->nullable()->default(0)->after('use_this');
            $table->boolean('use_this3')->nullable()->default(0)->after('use_this');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payitems1', function(Blueprint $table)
        {
            $table->dropColumn(array('use_this1', 'use_this2', 'use_this3'));
        });

        Schema::table('payitems2', function(Blueprint $table)
        {
            $table->dropColumn(array('use_this1', 'use_this2', 'use_this3'));
        });

        Schema::table('payitems3', function(Blueprint $table)
        {
            $table->dropColumn(array('use_this1', 'use_this2', 'use_this3'));
        });

        Schema::table('payitems4', function(Blueprint $table)
        {
            $table->dropColumn(array('use_this1', 'use_this2', 'use_this3'));
        });
    }
}
