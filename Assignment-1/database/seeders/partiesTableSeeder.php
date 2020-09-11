<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class partiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parties')->insert([
            ['name'=>'Act','image'=>'2010-01-20'],
            ['name'=>'Green', 'image'=>'1930-01-20'],
            ['name'=>'Labour', 'image'=>'2018-01-30'],
            ['name'=>'National', 'image'=>'2015-03-12'],
            ['name'=>'NZFirst', 'image'=>'2009-01-02'],
        ]);
    }
}
