<?php

use Illuminate\Database\Seeder;

class Worktype1234Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $type = array('A','B','C','D','E','F','G','H','I','J');
        DB::table('worktypes1')->truncate();

        for($i=0; $i < count($type); $i++) {
            DB::table('worktypes1')->insert([
                'type' => $type[$i],
                /*'change' => '',*/
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
/*                'sbtime3' => '',
                'ebtime3' => '',*/
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        };

        DB::table('worktypes2')->truncate();

        for($i=0; $i < count($type); $i++) {
            DB::table('worktypes2')->insert([
                'type' => $type[$i],
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sbtime4' => '',
                'ebtime4' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        };

        DB::table('worktypes3')->truncate();

        for($i=0; $i < count($type); $i++) {
            DB::table('worktypes3')->insert([
                'type' => $type[$i],
                'sworktime' => '',
                'eworktime' => '',
                'nextdaytime' => '0',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sbtime4' => '',
                'ebtime4' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        };
        DB::table('worktypes4')->truncate();

        for($i=0; $i < count($type); $i++) {
            DB::table('worktypes4')->insert([
                'type' => $type[$i],
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sbtime4' => '',
                'ebtime4' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        };

    }
}
