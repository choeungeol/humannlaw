<?php

use Illuminate\Database\Seeder;

class PayitemsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payitem1 = array('기본급','주휴수당','직책수당','근속수당','직무수당');

        for($i=0; $i < count($payitem1); $i++){
        DB::table('payitems1')->insert([
            'title'      => $payitem1[$i],
            'paycalc'    => '일수계산',
            'probaion'       => '해당없음',
            'is_severance_pay'       => '3개월',
            'is_taxfree'       => 0,
            'in_basicpay'       => 0,
            'use_this'       => 1,
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

       }

        $payitem2 = array('연장수당','야간수당','휴일수당','휴일연장','휴일야간','연차수당');

        for($i=0; $i < count($payitem2); $i++){
            DB::table('payitems2')->insert([
                'title'      => $payitem2[$i],
                'paycalc'    => '일수계산',
                'probaion'       => '해당없음',
                'is_severance_pay'       => '3개월',
                'is_taxfree'       => 0,
                'use_this'       => 1,
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

        }

        $payitem3 = array('식대','차량유지비','육아수당','연구활동비','명절떡값');

        for($i=0; $i < count($payitem3); $i++){
            DB::table('payitems3')->insert([
                'title'      => $payitem3[$i],
                'paycalc'    => '일수계산',
                'probaion'       => '해당없음',
                'is_severance_pay'       => '3개월',
                'is_taxfree'       => 0,
                'use_this'       => 1,
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

        }

        $payitem4 = array('상여금','특별성과금','특근수당','특별수당');

        for($i=0; $i < count($payitem4); $i++){
            DB::table('payitems4')->insert([
                'title'      => $payitem4[$i],
                'paycalc'    => '일수계산',
                'probaion'       => '해당없음',
                'is_severance_pay'       => '3개월',
                'is_taxfree'       => 0,
                'use_this'       => 1,
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),
            ]);

        }
    }
}
