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
            ['name'=>'Act','image'=>'img\act.jpg'],
            ['name'=>'Green', 'image'=>'img\green.jpg'],
            ['name'=>'Labour', 'image'=>'img\labour.jpg'],
            ['name'=>'National', 'image'=>'img\national.jpg'],
            ['name'=>'NZFirst', 'image'=>'img\nzfirst.jpg'],
        ]);
    }
}
