<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worktypes', function(Blueprint $table){
            $table->increments('id');
            $table->string('type' ,10);
            $table->string('week', 30);
            $table->string('worknum', 30);
            $table->string('worktype', 40);
            $table->string('sworktime')->nullable();
            $table->string('eworktime')->nullable();
            $table->string('sbtime1')->nullable();
            $table->string('ebtime1')->nullable();
            $table->string('sbtime2')->nullable();
            $table->string('ebtime2')->nullable();
            $table->string('sbtime3')->nullable();
            $table->string('ebtime3')->nullable();
            $table->integer('sortnum');
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
        Schema::drop('worktypes');
    }
}
