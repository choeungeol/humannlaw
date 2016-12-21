<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('postitles', function(Blueprint $table){
            $table->increments('id');
            $table->integer('jobtitle_id')->unsigned();
            $table->foreign('jobtitle_id')->references('id')->on('jobtitles');       //부서 ID
            $table->string('pos_code');     // 직위코드
            $table->string('pos_div_code');        //직위 구분코드
            $table->string('pos_name');     //명칭
            $table->boolean('pos_use');      //사용여부
            $table->string('pos_memo');     //비고
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
        Schema::table('postitles', function (Blueprint $table) {
           $table->dropForeign('postitles_jobtitle_id_foreign');
        });
        Schema::drop('postitles');


    }
}
