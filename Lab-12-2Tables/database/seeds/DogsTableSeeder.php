<?php

use Illuminate\Database\Seeder;

class DogsTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            ['name'=>'Jasper', 'date_of_birth'=>'2010-01-20', 'breed_id'=>'1'],
            ['name'=>'Wag', 'date_of_birth'=>'1930-01-20', 'breed_id'=>'7'],
            ['name'=>'Teddy', 'date_of_birth'=>'2018-01-30', 'breed_id'=>'8'],
            ['name'=>'Scout', 'date_of_birth'=>'2015-03-12', 'breed_id'=>'3'],
            ['name'=>'Honey', 'date_of_birth'=>'2009-01-02', 'breed_id'=>'1'],
        ]);
    }
}
