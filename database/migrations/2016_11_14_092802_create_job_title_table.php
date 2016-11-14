<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobtitles', function(Blueprint $table){
            $table->increments('id');
            $table->string('jobcode');     //실부서코드
            $table->string('code');        //구분코드
            $table->string('name');     //명칭
            $table->boolean('use');     //사용여부
            $table->string('memo');     //비고
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
        Schema::drop('jobtitles');
    }
}
