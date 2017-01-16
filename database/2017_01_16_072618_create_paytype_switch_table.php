<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaytypeSwitchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paytype1_switch_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('payitem1_id')->unsigned();
            $table->foreign('payitem1_id')->references('id')->on('payitems1');
            $table->string('paytype_name');
            $table->boolean('use_this')->defalut(0);
            $table->timestamps();

        });

        Schema::create('paytype2_switch_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('payitem2_id')->unsigned();
            $table->foreign('payitem2_id')->references('id')->on('payitems2');
            $table->string('paytype_name');
            $table->boolean('use_this')->defalut(0);
            $table->timestamps();

        });

        Schema::create('paytype3_switch_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('payitem3_id')->unsigned();
            $table->foreign('payitem3_id')->references('id')->on('payitems3');
            $table->string('paytype_name');
            $table->boolean('use_this')->defalut(0);
            $table->timestamps();

        });

        Schema::create('paytype4_switch_tables', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('payitem4_id')->unsigned();
            $table->foreign('payitem4_id')->references('id')->on('payitems4');
            $table->string('paytype_name');
            $table->boolean('use_this')->defalut(0);
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
        //
    }
}
