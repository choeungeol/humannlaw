<?php

use Illuminate\Database\Seeder;

class Worktype1234CalcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('worktypes1_calc')->truncate();
        DB::table('worktypes2_calc')->truncate();
        DB::table('worktypes3_calc')->truncate();
        DB::table('worktypes4_calc')->truncate();

        $alpha = array('A','B','C','D','E','F','G','H','I','J');
        $len = count($alpha);

        for ($i=0; $i < $len; $i++) {
            $index = $alpha[$i];
            DB::table('worktypes1_calc')->insert([
                'type' => $index,
                'mtotal'  => '0',     //한달 소정 근로시간
                'mover' => '0',     //한달 연장 근로시간
                'mnight' => '0',     //한달 야간 근로시간
                'mbreak' => '0',     //한달 주휴시간
                'mwbt' => '0',     //한달 월 연차시간
                'total' => '0',     //총 근로시간
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            $index = $alpha[$i];
            DB::table('worktypes2_calc')->insert([
                'type' => $index,
                'mtotal'  => '0',     //한달 소정 근로시간
                'mbreak' => '0',     //한달 주휴시간
                'mover' => '0',     //한달 연장 근로시간
                'mnight' => '0',     //한달 야간 근로시간
                'mwbt' => '0',     //한달 월 연차시간
                'total' => '0',     //총 근로시간
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            $index = $alpha[$i];
            DB::table('worktypes3_calc')->insert([
                'type' => $index,
                'mtotal'  => '0',     //한달 소정 근로시간
                'mnight' => '0',     //한달 야간 근로시간
                'mwbt' => '0',     //한달 월 연차시간
                'total' => '0',     //총 근로시간
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        for ($i=0; $i < $len; $i++) {
            $index = $alpha[$i];
            DB::table('worktypes4_calc')->insert([
                'type' => $index,
                'mtotal'  => '0',     //한달 소정 근로시간
                'mover' => '0',     //한달 연장 근로시간
                'mnight' => '0',     //한달 휴일 근로시간
                'mwwork' => '0',     //한달 휴일수당
                'mwover' => '0',     //한달 휴일 연장
                'mwnight' => '0',     //한달 휴일 야간
                'mbreak' => '0',        //한달 주휴
                'mwbt' => '0',     //한달 월 연차수당
                'total' => '0',     //총 근로시간
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

    }
}
