<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HandlingChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('handling_charges')->delete();
        
        \DB::table('handling_charges')->insert(array (
            0 => 
            array (
                'id' => 2,
                'payment_getway_name' => 'Strips',
                'price' => '0',
                'global_price' => '13',
                'Type_of_charge' => 'custom',
                'created_at' => '2022-03-11 09:31:21',
                'updated_at' => '2022-08-05 12:48:34',
            ),
            1 => 
            array (
                'id' => 5,
                'payment_getway_name' => 'paypal',
                'price' => '0',
                'global_price' => '13',
                'Type_of_charge' => 'custom',
                'created_at' => '2022-04-05 01:38:28',
                'updated_at' => '2022-08-05 12:48:34',
            ),
            2 => 
            array (
                'id' => 6,
                'payment_getway_name' => 'PayTm',
                'price' => '0',
                'global_price' => '13',
                'Type_of_charge' => 'custom',
                'created_at' => '2022-05-13 11:42:24',
                'updated_at' => '2022-08-05 12:48:34',
            ),
        ));
        
        
    }
}