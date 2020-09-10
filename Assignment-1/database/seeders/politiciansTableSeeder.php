<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class politiciansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('politicians')->insert([
            ['name'=>'Jasper', 'gender'=>'', 'rank'=>'', 'electorate'=>'', 'image'=>'2010-01-20', 'party_id'=>'2', ],
            ['name'=>'Wag',    'gender'=>'', 'rank'=>'', 'electorate'=>'', 'image'=>'1930-01-20', 'party_id'=>'3', ],
            ['name'=>'Teddy',  'gender'=>'', 'rank'=>'', 'electorate'=>'', 'image'=>'2018-01-30', 'party_id'=>'1', ],
            ['name'=>'Scout',  'gender'=>'', 'rank'=>'', 'electorate'=>'', 'image'=>'2015-03-12', 'party_id'=>'2', ],
            ['name'=>'Honey',  'gender'=>'', 'rank'=>'', 'electorate'=>'', 'image'=>'2009-01-02', 'party_id'=>'1', ],
        ]);
    }
}
