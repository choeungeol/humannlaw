<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyBasicinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_basicinfos', function(Blueprint $table){
            $table->increments('id');
            $table->string('co_name')->nullable();          //사업장명칭
            $table->string('co_no')->nullable();            //사업자번호
            $table->string('corp_regino')->nullable();      //법인등록번호
            $table->string('repre_name')->nullable();       //대표자명
            $table->string('repre_phone')->nullable();      //대표자핸드폰
            $table->string('repre_regino')->nullable();     //대표자 주민번호
            $table->string('repre_post')->nullable();       //대표자 우편번호
            $table->string('repre_addr1')->nullable();      //대표자 주소1
            $table->string('repre_addr2')->nullable();      //대표자 주소2
            $table->string('co_post')->nullable();          //사업장 우편번호
            $table->string('co_addr1')->nullable();         //사업장 주소1
            $table->string('co_addr2')->nullable();         //사업장 주소2
            $table->string('tel_no')->nullable();           //전화 번호
            $table->string('fax_no')->nullable();           //팩스번호
            $table->string('co_email')->nullable();         //사업장 이메일
            $table->string('pic_name')->nullable();         //담당자 명칭
            $table->string('pic_telno')->nullable();        //담당자 연락처
            $table->string('b_type')->nullable();           //업종
            $table->string('b_condition')->nullable();      //업태
            $table->string('pay_basicdate')->nullable();    //급여 기준일
            $table->string('pay_day')->nullable();          //급여 지급일
            $table->string('b_cal_manner')->nullable();     //일할계산 방법
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
        Schema::drop('company_basicinfos');
    }
}
