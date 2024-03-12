<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bombuflat',
                'state_id' => 1,
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-09-28 08:16:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Garacharma',
                'state_id' => 1,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-09-28 08:16:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Port Blair',
                'state_id' => 1,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-09-28 08:16:26',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rangat',
                'state_id' => 1,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-09-28 08:16:26',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Addanki',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Adivivaram',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Adoni',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aganampudi',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ajjaram',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Akividu',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Akkarampalle',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Akkayapalle',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Akkireddipalem',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Alampur',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Amalapuram',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Amudalavalasa',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Amur',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Anakapalle',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Anantapur',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Andole',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Atmakur',
                'state_id' => 2,
                
                'is_active' => 0,
                'created_at' => '2021-04-06 13:13:42',
                'updated_at' => '2021-04-06 13:13:42',
            )
        ));
        
        
    }
}