<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('AdminSeeder');
/*       $this->call('DatatablesSeeder');*/
        $this->call('JobtitleSeeder');
        $this->call('PostitleSeeder');
        $this->call('WorktypeSeeder');
        $this->call('CalctableSeeder');
        $this->call('Worktype1234Seeder');
        $this->call('Worktype1234CalcSeeder');
        $this->call('PayitemsSeed');
        $this->call('TaxdeductionSeeder');
        $this->call('PayDayTimeSeeder');

        Model::reguard();
    }
}
