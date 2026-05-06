<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'multi_currency' => 1,
                'country_id' => '231',
                'currency' => 'USD',
                'created_at' => NULL,
                'updated_at' => '2021-04-29 12:14:43',
            ),
            1 => 
            array (
                'id' => 2,
                'multi_currency' => 6,
                'country_id' => NULL,
                'currency' => 'INR',
                'created_at' => NULL,
                'updated_at' => '2021-04-29 12:14:43',
            ),
            2 => 
            array (
                'id' => 3,
                'multi_currency' => 7,
                'country_id' => NULL,
                'currency' => 'BDT',
                'created_at' => NULL,
                'updated_at' => '2021-04-29 12:14:44',
            ),
        ));
        
        
    }
}