<?php

use Illuminate\Database\Seeder;

class JobtitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Auto Increments 초기화
        DB::table('jobtitles')->truncate();

        //1. 본사
        DB::table('jobtitles')->insert([
            'jobcode'      => '001',
            'code'    => '01',
            'name'       => '본사',
            'use'       => 1,
            'memo'       => '본사',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //2. 지사
        DB::table('jobtitles')->insert([
            'jobcode'      => '002',
            'code'    => '02',
            'name'       => '지사',
            'use'       => 1,
            'memo'       => '지사',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //3. 총무
        DB::table('jobtitles')->insert([
            'jobcode'      => '003',
            'code'    => '03',
            'name'       => '총무',
            'use'       => 1,
            'memo'       => '총무',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //4. 경영지원
        DB::table('jobtitles')->insert([
            'jobcode'      => '004',
            'code'    => '04',
            'name'       => '경영지원',
            'use'       => 1,
            'memo'       => '경영지원',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //5. 생산부
        DB::table('jobtitles')->insert([
            'jobcode'      => '005',
            'code'    => '05',
            'name'       => '생산부',
            'use'       => 1,
            'memo'       => '생산부',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //6. 관리부
        DB::table('jobtitles')->insert([
            'jobcode'      => '006',
            'code'    => '06',
            'name'       => '관리부',
            'use'       => 1,
            'memo'       => '관리부',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);


    }
}
