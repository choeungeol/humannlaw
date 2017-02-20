<?php

use Illuminate\Database\Seeder;

class PayDayTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paydays')->truncate();

        $payday = array('기본급','주휴수당','연장수당','야간수당'.'휴일수당','휴일연장','휴일야간','연차수당'); // 포괄일당제 명칭

        for ($i = 0; $i < count($payday); $i++) {
            DB::table('paydays')->insert([
                'title' => $payday[$i],
                'is_check' => 0,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

        DB::table('paytimes')->truncate();

        DB::table('paytimes')->insert([
            'title' => '최저임금',
            'price' => '6,470',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

    }
}
