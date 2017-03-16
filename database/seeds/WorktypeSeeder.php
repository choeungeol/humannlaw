<?php

use Illuminate\Database\Seeder;

class WorktypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('worktypes')->truncate();
        $days = array('월요일','화요일','수요일','목요일','금요일','토요일','일요일');
        $worknum = array('매주','매주','매주','매주','매주','없음','없음',);
        $len = count($days);

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'A',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'B',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'C',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'D',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'E',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'F',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'G',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'H',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'I',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            DB::table('worktypes')->insert([
                'type' => 'J',
                'week' => $days[$i],
                'worknum' => $worknum[$i],
                'worktype' => '근무일',
                'sworktime' => '',
                'eworktime' => '',
                'sbtime1' => '',
                'ebtime1' => '',
                'sbtime2' => '',
                'ebtime2' => '',
                'sbtime3' => '',
                'ebtime3' => '',
                'sortnum' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
