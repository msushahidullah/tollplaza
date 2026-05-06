<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxes')->delete();
        
        \DB::table('taxes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Indian Tax',
                'zone_id' => 3,
                'rate' => '5',
                'type' => 'p',
                'created_at' => '2020-01-15 16:52:31',
                'updated_at' => '2020-06-16 10:42:31',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'United States',
                'zone_id' => 4,
                'rate' => '5',
                'type' => 'p',
                'created_at' => '2020-07-08 12:31:05',
                'updated_at' => '2020-07-08 12:31:05',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'StoreTAX',
                'zone_id' => 3,
                'rate' => '10',
                'type' => 'p',
                'created_at' => '2020-07-23 23:28:56',
                'updated_at' => '2020-07-23 23:28:56',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'test',
                'zone_id' => 3,
                'rate' => '18',
                'type' => 'p',
                'created_at' => '2020-07-24 23:53:01',
                'updated_at' => '2020-07-24 23:53:01',
            ),
        ));
        
        
    }
}