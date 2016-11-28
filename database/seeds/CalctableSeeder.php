<?php

use Illuminate\Database\Seeder;

class CalctableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $alpha = array('A','B','C','D','E','F','G','H','I','J');
        $len = count($alpha);

        for ($i=0; $i < $len; $i++) {
            $index = $alpha[$i];
            DB::table('calc_table')->insert([
                'type' => $index,
                'mtotal'  => '0',     //한달 소정 근로시간
                'mbreak' => '0',     //한달 주휴시간
                'mover' => '0',     //한달 연장 근로시간
                'mnight' => '0',     //한달 야간 근로시간
                'mwwork' => '0',     //한달 휴일 근로시간
                'mwover' => '0',     //한달 휴일 연장
                'mwnight' => '0',     //한달 휴일 야간
                'mwbt' => '0',     //한달 월 연차시간
                'total' => '0',     //총 근로시간
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
