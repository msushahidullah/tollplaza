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
                'country' => 'IND',
                'created_at' => '2020-01-14 17:59:58',
                'updated_at' => '2020-01-14 17:59:58',
            ),
            1 => 
            array (
                'id' => 2,
                'country' => 'USA',
                'created_at' => '2020-01-15 16:27:29',
                'updated_at' => '2020-01-15 16:27:29',
            ),
            2 => 
            array (
                'id' => 3,
                'country' => 'CAN',
                'created_at' => '2020-01-15 16:28:38',
                'updated_at' => '2020-01-15 16:28:38',
            ),
            3 => 
            array (
                'id' => 4,
                'country' => 'PAK',
                'created_at' => '2020-12-25 07:18:40',
                'updated_at' => '2020-12-25 07:18:40',
            ),
        ));
        
        
    }
}