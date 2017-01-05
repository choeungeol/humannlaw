<?php

use Illuminate\Database\Seeder;

class TaxdeductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = array('소득세','주민세','국민연금','건강보험','장기요양보험','고용보험','가불금','축의금','부의금','전별금','연말정산');

        // Auto Increments 초기화
        DB::table('tax_deductions')->truncate();

        for($i=0; $i < count($titles); $i++){

            DB::table('tax_deductions')->insert([
                'title' => $titles[$i],
                'is_check' => 0,
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now(),

            ]);

        }

    }
}
