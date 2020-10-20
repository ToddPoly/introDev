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
            ['name'=>'Act','image'=>'img\act.jpg', 'pollResult'=>1],
            ['name'=>'Green', 'image'=>'img\green.jpg', 'pollResult'=>2],
            ['name'=>'Labour', 'image'=>'img\labour.jpg', 'pollResult'=>3],
            ['name'=>'National', 'image'=>'img\national.jpg', 'pollResult'=>4],
            ['name'=>'NZFirst', 'image'=>'img\nzfirst.jpg', 'pollResult'=>5],
        ]);
    }
}
