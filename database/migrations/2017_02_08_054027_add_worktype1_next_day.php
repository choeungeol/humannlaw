<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWorktype1NextDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('worktypes1', function(Blueprint $table)
        {
            $table->boolean('third_nextday')->nullable()->default(0);
            $table->boolean('third_bnextday')->nullable()->default(0);
            $table->boolean('fourth_nextday')->nullable()->default(0);
            $table->boolean('fourth_bnextday')->nullable()->default(0);
            $table->boolean('fifth_nextday')->nullable()->default(0);
            $table->boolean('fifth_bnextday')->nullable()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worktypes1', function(Blueprint $table)
        {
            $table->dropColumn(array('third_nextday', 'third_bnextday', 'fourth_nextday', 'fourth_bnextday', 'fifth_nextday', 'fifth_bnextday'));


        });
    }
}
