<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxDeductionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_deductions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('is_check')->default(0);
            /*$table->boolean('is_income_tax')->default(1);                           //소득세
            $table->boolean('is_residence_tax')->default(1);                        //주민세
            $table->boolean('is_national_pension')->default(1);                     //국민연금
            $table->boolean('is_health_insurance')->default(1);                     //건강보험
            $table->boolean('is_longterm_insurance')->default(1);                   //장기요양보험
            $table->boolean('is_unemployment_insurance')->default(1);               //고용보험
            $table->boolean('is_suspense_payment')->default(1);                     //가불금
            $table->boolean('is_congratulatory_money')->default(1);                 //축의금
            $table->boolean('is_condolence_money')->default(1);                     //부의금
            $table->boolean('is_parting_gift')->default(1);                         //전별금
            $table->boolean('is_year_adjustment')->default(1);                      //연말정산*/
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
        Schema::drop('tax_deductions');
    }
}
