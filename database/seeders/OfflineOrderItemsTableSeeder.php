<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfflineOrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offline_order_items')->delete();
        
        \DB::table('offline_order_items')->insert(array (
            0 => 
            array (
                'id' => 7,
                'order_id' => 1,
            'product_name' => 'Canon EOS185 (24MP)',
                'product_price' => 1000.0,
                'product_qty' => 2,
                'origin' => 'USA',
                'product_total' => 2000.0,
                'created_at' => '2021-09-27 07:22:11',
                'updated_at' => '2021-09-27 07:22:11',
            ),
            1 => 
            array (
                'id' => 8,
                'order_id' => 1,
            'product_name' => 'Apple iPad Pro (Silver)',
                'product_price' => 5000.0,
                'product_qty' => 3,
                'origin' => 'USA',
                'product_total' => 15000.0,
                'created_at' => '2021-09-27 07:22:11',
                'updated_at' => '2021-09-27 07:22:11',
            ),
            2 => 
            array (
                'id' => 9,
                'order_id' => 2,
                'product_name' => 'NHDT',
                'product_price' => 1000.0,
                'product_qty' => 1,
                'origin' => 'India',
                'product_total' => 1000.0,
                'created_at' => '2022-04-13 01:58:31',
                'updated_at' => '2022-04-13 01:58:31',
            ),
        ));
        
        
    }
}