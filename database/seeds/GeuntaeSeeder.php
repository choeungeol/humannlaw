<?php

use Illuminate\Database\Seeder;

class GeuntaeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('geuntae_deducts')->truncate();
        DB::table('addextraworks')->truncate();
        DB::table('vacations')->truncate();

        $geuntae = array('지각','조퇴','외출','결근');
        $extrawork = array('추가연장','추가야간','휴일근로','특별근로');
        $vacation = array('병가','육아휴직','출산휴가','일반휴직');

        $len = count($geuntae);

        for ($i=0; $i < $len; $i++) {
            DB::table('geuntae_deducts')->insert([
                'title' => $geuntae[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }



        $len = count($extrawork);

        for ($i=0; $i < $len; $i++) {
            DB::table('addextraworks')->insert([
                'title' => $extrawork[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }




        $len = count($vacation);

        for ($i=0; $i < $len; $i++) {
            DB::table('vacations')->insert([
                'title' => $vacation[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }


    }
}
