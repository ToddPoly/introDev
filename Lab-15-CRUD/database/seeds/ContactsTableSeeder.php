<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['firstName'=>'Harry', 'lastName'=>'Potter', 'phone'=>'021 678 987'],
            ['firstName'=>'Ron', 'lastName'=>'Weasley', 'phone'=>'021 678 333'],
            ['firstName'=>'Hermione', 'lastName'=>'Granger', 'phone'=>'021 678 111'],
            ['firstName'=>'Albus', 'lastName'=>'Dumbledore', 'phone'=>'021 678 222'],
            ['firstName'=>'Dolores', 'lastName'=>'Umbridge', 'phone'=>'021 678 454'],
            ['firstName'=>'Rubeus', 'lastName'=>'Hagrid', 'phone'=>'021 678 666'],
        ]);
    }
}
