<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingCoupansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_coupans')->delete();
        
        \DB::table('shipping_coupans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test1',
                'status' => '0',
                'coupan_type' => 'fix',
                'number_of_price' => 5,
                'created_at' => '2025-02-17 11:42:35',
                'updated_at' => '2022-07-01 11:20:45',
            ),
        ));
        
        
    }
}