<?php

use Illuminate\Database\Seeder;

class PostitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Auto Increments 초기화
/*        DB::table('postitles')->truncate();*/

        $job = \App\Jobtitle::All();
        foreach($job as $j){
            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '001',
                'pos_div_code' => '01',
                'pos_name'       => '대표',
                'pos_use'       => 1,
                'pos_memo'       => '대표',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '002',
                'pos_div_code' => '02',
                'pos_name'       => '부사장',
                'pos_use'       => 1,
                'pos_memo'       => '부사장',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '003',
                'pos_div_code' => '03',
                'pos_name'       => '이사',
                'pos_use'       => 1,
                'pos_memo'       => '이사',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '004',
                'pos_div_code' => '04',
                'pos_name'       => '전무',
                'pos_use'       => 1,
                'pos_memo'       => '전무',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '005',
                'pos_div_code' => '05',
                'pos_name'       => '상무',
                'pos_use'       => 1,
                'pos_memo'       => '상무',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '006',
                'pos_div_code' => '06',
                'pos_name'       => '부장',
                'pos_use'       => 1,
                'pos_memo'       => '부장',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '007',
                'pos_div_code' => '07',
                'pos_name'       => '차장',
                'pos_use'       => 1,
                'pos_memo'       => '차장',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '008',
                'pos_div_code' => '08',
                'pos_name'       => '실장',
                'pos_use'       => 1,
                'pos_memo'       => '실장',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '009',
                'pos_div_code' => '09',
                'pos_name'       => '과장',
                'pos_use'       => 1,
                'pos_memo'       => '과장',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '010',
                'pos_div_code' => '10',
                'pos_name'       => '대리',
                'pos_use'       => 1,
                'pos_memo'       => '대리',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

            DB::table('postitles')->insert([
                'jobtitle_id'      => $j->id,
                'pos_code'    => '011',
                'pos_div_code' => '11',
                'pos_name'       => '사원',
                'pos_use'       => 1,
                'pos_memo'       => '사원',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);
        }

    }
}
