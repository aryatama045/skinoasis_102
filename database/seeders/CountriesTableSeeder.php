<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'is_active' => 0,
                'created_at' => '2021-04-06 13:06:30',
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'code' => 'ID',
                'name' => 'Indonesia',
                'is_active' => 1,
                'created_at' => '2021-04-06 13:06:30',
                'updated_at' => NULL,
            ),
        )); 
    }
}