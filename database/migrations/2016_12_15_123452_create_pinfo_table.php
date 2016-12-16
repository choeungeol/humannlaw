<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_infos', function(Blueprint $table) {
            $table->increments('id');                           // 정렬번호
            $table->string('employee_num')->nullable();
            $table->string('employee_post')->nullable();        // 우편번호
            $table->string('employee_addr1')->nullable();       // 주소1
            $table->string('employee_addr2')->nullable();       // 주소2
            $table->string('work_condition')->nullable();       // 근무상태
            $table->string('name')->nullable();                 // 성명
            $table->string('tel')->nullable();                  // 연락처
            $table->string('join_day')->nullable();             // 입사일자
            $table->string('country')->nullable();              // 국적
            $table->string('regi_no')->nullable();              // 주민번호
            $table->string('email')->nullable();                // 이메일
            $table->string('exit_day')->nullable();             // 퇴사일자
            $table->string('payday')->nullable();               // 급여지급일
            $table->string('job')->nullable();                  // 부서
            $table->string('employee_type')->nullable();        // 채용형태
            $table->string('contract')->nullable();             // 계약기간
            $table->string('renewal')->nullable();              // 재갱신횟수
            $table->string('worktype')->nullable();             // 근무유형
            $table->string('location')->nullable();             // 취업장소
            $table->string('position')->nullable();             // 직위
            $table->string('paytype')->nullable();              // 급여형태
            $table->string('first_pay')->nullable();            // 수습급여비율
            $table->string('swtime')->nullable();               // 근로시간
            $table->string('ewtime')->nullable();               //
            $table->string('workplace')->nullable();            // 사업장
            $table->string('active_partner')->nullable();       // 담당업무
            $table->string('sbtime')->nullable();               // 휴게시간
            $table->string('ebtime')->nullable();               //
            $table->string('btime')->nullable();                //총 휴게시간
            $table->string('last_ability')->nullable();         // 최종학력
            $table->boolean('ismarried')->default(false);            // 결혼여부
            $table->string('blood')->nullable();                // 혈액형
            $table->string('speciality')->nullable();           // 특기
            $table->string('pay_bank')->nullable();             // 급여은행
            $table->boolean('isveterans')->default(false);           // 보훈여부
            $table->string('height')->nullable();               // 신장
            $table->string('faith')->nullable();                // 종교
            $table->string('medical_history')->nullable();      // 병력구분
            $table->string('account_num')->nullable();          // 계좌 번호
            $table->boolean('isdisabled')->default(false);           // 장애인여부
            $table->string('weight')->nullable();               // 체중
            $table->string('hobby')->nullable();                // 취미
            $table->string('have_family')->nullable();          // 부양가족수
            $table->string('account_name')->nullable();         // 예금주
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
        Schema::drop('person_infos');
    }
}
