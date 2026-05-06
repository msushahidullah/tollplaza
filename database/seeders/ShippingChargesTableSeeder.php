<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingChargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_charges')->delete();
        
        \DB::table('shipping_charges')->insert(array (
            0 => 
            array (
                'id' => 14,
                'city_id' => 'Post Falls',
                'custom_price' => '11',
                'global_price' => '23',
                'Type_of_charge' => 'global',
                'status' => 1,
                'created_at' => '2022-03-17 10:56:10',
                'updated_at' => '2022-06-13 10:35:02',
            ),
            1 => 
            array (
                'id' => 17,
                'city_id' => 'Bhilwara',
                'custom_price' => '10',
                'global_price' => '23',
                'Type_of_charge' => 'global',
                'status' => 1,
                'created_at' => '2022-04-18 11:02:45',
                'updated_at' => '2022-06-13 10:35:02',
            ),
        ));
        
        
    }
}