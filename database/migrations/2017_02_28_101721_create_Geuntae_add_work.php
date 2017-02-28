<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeuntaeAddWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geuntae_adds', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');
            $table->string('geuntae_title');
            $table->string('use_date');
            $table->boolean('pay_apply')->default(0);
            $table->string('minus_timepay')->nullable();
            $table->string('minus_time')->nullable();
            $table->string('minus_pay')->nullable();
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
        Schema::drop('geuntae_adds');
    }
}
