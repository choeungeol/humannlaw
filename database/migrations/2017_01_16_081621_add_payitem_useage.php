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
            $table->boolean('use_this1')->default(0)->after('use_this');
            $table->boolean('use_this2')->default(0)->after('use_this1');
            $table->boolean('use_this3')->default(0)->after('use_this2');
        });

        Schema::table('payitems2', function(Blueprint $table)
        {
            $table->boolean('use_this1')->default(0)->after('use_this');
            $table->boolean('use_this2')->default(0)->after('use_this1');
            $table->boolean('use_this3')->default(0)->after('use_this2');
        });

        Schema::table('payitems3', function(Blueprint $table)
        {
            $table->boolean('use_this1')->default(0)->after('use_this');
            $table->boolean('use_this2')->default(0)->after('use_this1');
            $table->boolean('use_this3')->default(0)->after('use_this2');
        });

        Schema::table('payitems4', function(Blueprint $table)
        {
            $table->boolean('use_this1')->default(0)->after('use_this');
            $table->boolean('use_this2')->default(0)->after('use_this1');
            $table->boolean('use_this3')->default(0)->after('use_this2');
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
            $table->dropColumn('use_this1');
            $table->dropColumn('use_this2');
            $table->dropColumn('use_this3');
        });

        Schema::table('payitems2', function(Blueprint $table)
        {
            $table->dropColumn('use_this1');
            $table->dropColumn('use_this2');
            $table->dropColumn('use_this3');
        });

        Schema::table('payitems3', function(Blueprint $table)
        {
            $table->dropColumn('use_this1');
            $table->dropColumn('use_this2');
            $table->dropColumn('use_this3');
        });

        Schema::table('payitems4', function(Blueprint $table)
        {
            $table->dropColumn('use_this1');
            $table->dropColumn('use_this2');
            $table->dropColumn('use_this3');
        });
    }
}
