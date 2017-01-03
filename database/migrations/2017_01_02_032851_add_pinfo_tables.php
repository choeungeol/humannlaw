<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPinfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('person_infos', function(Blueprint $table)
        {
/*            $table->integer('company_basicinfo_id')->unsigned()->nullable();
            $table->foreign('company_basicinfo_id')->references('id')->on('company_basicinfo');       //부서 ID*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('person_infos', function(Blueprint $table)
        {
/*            // delete above columns
            $table->dropForeign('person_infos_company_basicinfo_id_foreign');
            $table->dropColumn('company_basicinfo_id');*/
        });
    }

}
