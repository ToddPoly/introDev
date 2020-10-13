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
            ['name'=>'David Seymour', 'gender'=>'Male', 'rank'=>'Leader', 'Electorate'=>"Epsom",'image'=>'img/David-Seymour.jpg', 'party_ID'=> 1],
            ['name'=>'Chris Baillie ', 'gender'=>'Male', 'rank'=>'Deputy Leader', 'Electorate'=>"Wellington Central",'image'=>'img\Chris-Baillie.jpg', 'party_ID'=> 1],
            ['name'=>'Chloe Swarbrick', 'gender'=>'Female', 'rank'=>'MP', 'Electorate'=>"Auckland Central",'image'=>'img\Chloe-Swarbrick.jpg', 'party_ID'=> 2],
            ['name'=>'Golriz Ghahraman', 'gender'=>'Female', 'rank'=>'MP', 'Electorate'=>"Mount Roskill",'image'=>'img\Golriz-Ghahraman.jpg', 'party_ID'=> 2],
            ['name'=>'Jacinda Ardern', 'gender'=>'Female', 'rank'=>'Leader', 'Electorate'=>"Mount Albert",'image'=>'img\Jacinda-Ardern.jpg', 'party_ID'=> 3],
            ['name'=>'Kelvin Davis', 'gender'=>'Male', 'rank'=>'Deputy Leader', 'Electorate'=>"Te Tai Tonga",'image'=>'img\Rino-Tirikatane.jpg', 'party_ID'=> 3],
            ['name'=>'Judith Collins', 'gender'=>'Female', 'rank'=>'Leader', 'Electorate'=>"Papkura",'image'=>'img\Judith-Collins.jpg', 'party_ID'=> 4],
            ['name'=>'Todd Muller', 'gender'=>'Male', 'rank'=>'MP', 'Electorate'=>"Bay of Plenty",'image'=>'img\Todd-Muller.jpg', 'party_ID'=> 4],
            ['name'=>'Winston Peters', 'gender'=>'Male', 'rank'=>'Leader', 'Electorate'=>"Northland",'image'=>'img\Winston-Peters.jpg', 'party_ID'=> 5],
            ['name'=>'Ron Mark', 'gender'=>'Male', 'rank'=>'Deputy Leader', 'Electorate'=>"Rotorua",'image'=>'img\Ron-Mark.jpg', 'party_ID'=> 5]
        ]);
    }
}
