<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlashSaleItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flash_sale_items')->delete();
        
        \DB::table('flash_sale_items')->insert(array (
            0 => 
            array (
                'id' => 155,
                'sale_id' => 8,
                'product_id' => 124,
                'simple_product_id' => 0,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-09-15 13:53:08',
                'updated_at' => '2023-09-15 13:53:08',
            ),
            1 => 
            array (
                'id' => 156,
                'sale_id' => 8,
                'product_id' => 125,
                'simple_product_id' => 0,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-09-15 13:53:08',
                'updated_at' => '2023-09-15 13:53:08',
            ),
            2 => 
            array (
                'id' => 157,
                'sale_id' => 8,
                'product_id' => 0,
                'simple_product_id' => 33,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-09-15 13:53:08',
                'updated_at' => '2023-09-15 13:53:08',
            ),
            3 => 
            array (
                'id' => 158,
                'sale_id' => 8,
                'product_id' => 0,
                'simple_product_id' => 2,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-09-15 13:53:08',
                'updated_at' => '2023-09-15 13:53:08',
            ),
            4 => 
            array (
                'id' => 159,
                'sale_id' => 10,
                'product_id' => 124,
                'simple_product_id' => 0,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:16:04',
                'updated_at' => '2023-10-02 14:16:04',
            ),
            5 => 
            array (
                'id' => 160,
                'sale_id' => 10,
                'product_id' => 125,
                'simple_product_id' => 0,
                'discount' => 50.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:16:04',
                'updated_at' => '2023-10-02 14:16:04',
            ),
            6 => 
            array (
                'id' => 161,
                'sale_id' => 11,
                'product_id' => 125,
                'simple_product_id' => 0,
                'discount' => 10.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:24:38',
                'updated_at' => '2023-10-02 14:24:38',
            ),
            7 => 
            array (
                'id' => 162,
                'sale_id' => 11,
                'product_id' => 124,
                'simple_product_id' => 0,
                'discount' => 10.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:24:38',
                'updated_at' => '2023-10-02 14:24:38',
            ),
            8 => 
            array (
                'id' => 163,
                'sale_id' => 11,
                'product_id' => 121,
                'simple_product_id' => 0,
                'discount' => 25.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:24:38',
                'updated_at' => '2023-10-02 14:24:38',
            ),
            9 => 
            array (
                'id' => 164,
                'sale_id' => 11,
                'product_id' => 119,
                'simple_product_id' => 0,
                'discount' => 20.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:24:38',
                'updated_at' => '2023-10-02 14:24:38',
            ),
            10 => 
            array (
                'id' => 165,
                'sale_id' => 11,
                'product_id' => 147,
                'simple_product_id' => 0,
                'discount' => 80.0,
                'discount_type' => 'fixed',
                'created_at' => '2023-10-02 14:24:38',
                'updated_at' => '2023-10-02 14:24:38',
            ),
        ));
        
        
    }
}