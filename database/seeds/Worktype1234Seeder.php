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
                'change' => '',
                'part' => '',
                'first_sworktime' => '',
                'first_eworktime' => '',
                'second_sworktime' => '',
                'second_eworktime' => '',
                'third_sworktime' => '',
                'third_eworktime' => '',
                'fourth_sworktime' => '',
                'fourth_eworktime' => '',
                'fifth_sworktime' => '',
                'fifth_eworktime' => '',
                'first_sbtime1' => '',
                'first_ebtime1' => '',
                'second_sbtime1' => '',
                'second_ebtime1' => '',
                'third_sbtime1' => '',
                'third_ebtime1' => '',
                'fourth_sbtime1' => '',
                'fourth_ebtime1' => '',
                'fifth_sbtime1' => '',
                'fifth_ebtime1' => '',
                'first_sbtime2' => '',
                'first_ebtime2' => '',
                'second_sbtime2' => '',
                'second_ebtime2' => '',
                'third_sbtime2' => '',
                'third_ebtime2' => '',
                'fourth_sbtime2' => '',
                'fourth_ebtime2' => '',
                'fifth_sbtime2' => '',
                'fifth_ebtime2' => '',
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
