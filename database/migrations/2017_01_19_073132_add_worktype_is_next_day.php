<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWorktypeIsNextDay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('worktypes', function(Blueprint $table)
        {

            $table->boolean('isnextday')->nullable()->default(0)->after('sortnum');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worktypes', function(Blueprint $table)
        {

            $table->dropColumn('isnextday');

        });

    }
}
