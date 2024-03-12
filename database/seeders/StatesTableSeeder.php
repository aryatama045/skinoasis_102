<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('states')->delete();

        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 101,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-09-28 08:16:20',
            ),
            157 => 
            array (
                'id' => 1666,
                'name' => 'Aceh',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            158 => 
            array (
                'id' => 1667,
                'name' => 'Bali',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            159 => 
            array (
                'id' => 1668,
                'name' => 'Bangka-Belitung',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            160 => 
            array (
                'id' => 1669,
                'name' => 'Banten',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            161 => 
            array (
                'id' => 1670,
                'name' => 'Bengkulu',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            162 => 
            array (
                'id' => 1671,
                'name' => 'Gandaria',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            163 => 
            array (
                'id' => 1672,
                'name' => 'Gorontalo',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            164 => 
            array (
                'id' => 1673,
                'name' => 'Jakarta',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            165 => 
            array (
                'id' => 1674,
                'name' => 'Jambi',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            166 => 
            array (
                'id' => 1675,
                'name' => 'Jawa Barat',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            167 => 
            array (
                'id' => 1676,
                'name' => 'Jawa Tengah',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            168 => 
            array (
                'id' => 1677,
                'name' => 'Jawa Timur',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            169 => 
            array (
                'id' => 1678,
                'name' => 'Kalimantan Barat',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            170 => 
            array (
                'id' => 1679,
                'name' => 'Kalimantan Selatan',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            171 => 
            array (
                'id' => 1680,
                'name' => 'Kalimantan Tengah',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            172 => 
            array (
                'id' => 1681,
                'name' => 'Kalimantan Timur',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            173 => 
            array (
                'id' => 1682,
                'name' => 'Kendal',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            174 => 
            array (
                'id' => 1683,
                'name' => 'Lampung',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            175 => 
            array (
                'id' => 1684,
                'name' => 'Maluku',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            176 => 
            array (
                'id' => 1685,
                'name' => 'Maluku Utara',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            177 => 
            array (
                'id' => 1686,
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            178 => 
            array (
                'id' => 1687,
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            179 => 
            array (
                'id' => 1688,
                'name' => 'Papua',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            180 => 
            array (
                'id' => 1689,
                'name' => 'Riau',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            181 => 
            array (
                'id' => 1690,
                'name' => 'Riau Kepulauan',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            182 => 
            array (
                'id' => 1691,
                'name' => 'Solo',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            183 => 
            array (
                'id' => 1692,
                'name' => 'Sulawesi Selatan',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            184 => 
            array (
                'id' => 1693,
                'name' => 'Sulawesi Tengah',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            185 => 
            array (
                'id' => 1694,
                'name' => 'Sulawesi Tenggara',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            186 => 
            array (
                'id' => 1695,
                'name' => 'Sulawesi Utara',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            187 => 
            array (
                'id' => 1696,
                'name' => 'Sumatera Barat',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            188 => 
            array (
                'id' => 1697,
                'name' => 'Sumatera Selatan',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            189 => 
            array (
                'id' => 1698,
                'name' => 'Sumatera Utara',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            190 => 
            array (
                'id' => 1699,
                'name' => 'Yogyakarta',
                'country_id' => 102,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
            499 => 
            array (
                'id' => 4030,
                'name' => 'Falcon',
                'country_id' => 237,
                'is_active' => 1,
                'created_at' => '2021-04-06 13:11:20',
                'updated_at' => '2021-04-06 13:11:20',
            ),
        ));

    }
}