<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CashbacksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cashbacks')->delete();
        
        \DB::table('cashbacks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => NULL,
                'simple_product_id' => 1,
                'cashback_type' => 'fix',
                'discount_type' => 'upto',
                'discount' => 10.006,
                'enable' => 0,
                'created_at' => '2021-08-10 14:51:58',
                'updated_at' => '2021-09-23 10:53:49',
            ),
            1 => 
            array (
                'id' => 3,
                'product_id' => NULL,
                'simple_product_id' => 4,
                'cashback_type' => 'per',
                'discount_type' => 'upto',
                'discount' => 10.0,
                'enable' => 1,
                'created_at' => '2021-08-10 17:33:52',
                'updated_at' => '2021-08-11 11:38:47',
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 149,
                'simple_product_id' => NULL,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 15.0,
                'enable' => 1,
                'created_at' => '2021-08-11 11:03:49',
                'updated_at' => '2021-08-11 11:24:05',
            ),
            3 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'simple_product_id' => NULL,
                'cashback_type' => 'per',
                'discount_type' => 'upto',
                'discount' => 5.0,
                'enable' => 1,
                'created_at' => '2021-08-12 14:36:12',
                'updated_at' => '2021-08-12 14:41:35',
            ),
            4 => 
            array (
                'id' => 7,
                'product_id' => 151,
                'simple_product_id' => NULL,
                'cashback_type' => 'fix',
                'discount_type' => 'upto',
                'discount' => 100.0,
                'enable' => 1,
                'created_at' => '2021-09-18 17:52:56',
                'updated_at' => '2021-09-18 17:52:56',
            ),
            5 => 
            array (
                'id' => 8,
                'product_id' => NULL,
                'simple_product_id' => 37,
                'cashback_type' => 'per',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 11:17:11',
                'updated_at' => '2025-02-17 11:17:11',
            ),
            6 => 
            array (
                'id' => 9,
                'product_id' => NULL,
                'simple_product_id' => 38,
                'cashback_type' => 'per',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 11:23:28',
                'updated_at' => '2025-02-17 11:23:28',
            ),
            7 => 
            array (
                'id' => 10,
                'product_id' => NULL,
                'simple_product_id' => 39,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 12:07:35',
                'updated_at' => '2025-02-17 12:17:47',
            ),
            8 => 
            array (
                'id' => 11,
                'product_id' => NULL,
                'simple_product_id' => 40,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 0,
                'created_at' => '2025-02-17 12:21:27',
                'updated_at' => '2025-02-17 12:21:27',
            ),
            9 => 
            array (
                'id' => 12,
                'product_id' => NULL,
                'simple_product_id' => 41,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 16:15:40',
                'updated_at' => '2025-02-17 16:15:40',
            ),
            10 => 
            array (
                'id' => 13,
                'product_id' => NULL,
                'simple_product_id' => 42,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 16:37:40',
                'updated_at' => '2025-02-17 16:37:40',
            ),
            11 => 
            array (
                'id' => 14,
                'product_id' => NULL,
                'simple_product_id' => 43,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 17:00:32',
                'updated_at' => '2025-02-17 17:00:32',
            ),
            12 => 
            array (
                'id' => 15,
                'product_id' => NULL,
                'simple_product_id' => 44,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 17:12:35',
                'updated_at' => '2025-02-17 17:12:35',
            ),
            13 => 
            array (
                'id' => 16,
                'product_id' => NULL,
                'simple_product_id' => 45,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 17:24:38',
                'updated_at' => '2025-02-17 17:24:38',
            ),
            14 => 
            array (
                'id' => 17,
                'product_id' => NULL,
                'simple_product_id' => 46,
                'cashback_type' => 'per',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 17:38:21',
                'updated_at' => '2025-02-17 17:38:21',
            ),
            15 => 
            array (
                'id' => 18,
                'product_id' => NULL,
                'simple_product_id' => 47,
                'cashback_type' => 'per',
                'discount_type' => 'flat',
                'discount' => 2.0,
                'enable' => 1,
                'created_at' => '2025-02-17 17:48:01',
                'updated_at' => '2025-02-17 17:48:01',
            ),
            16 => 
            array (
                'id' => 19,
                'product_id' => NULL,
                'simple_product_id' => 48,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 5.0,
                'enable' => 1,
                'created_at' => '2025-02-18 10:05:03',
                'updated_at' => '2025-02-18 10:05:03',
            ),
            17 => 
            array (
                'id' => 20,
                'product_id' => NULL,
                'simple_product_id' => 49,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 10:15:43',
                'updated_at' => '2025-02-18 10:15:43',
            ),
            18 => 
            array (
                'id' => 21,
                'product_id' => NULL,
                'simple_product_id' => 50,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 10:27:23',
                'updated_at' => '2025-02-18 10:27:23',
            ),
            19 => 
            array (
                'id' => 22,
                'product_id' => NULL,
                'simple_product_id' => 51,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 10:48:44',
                'updated_at' => '2025-02-18 10:48:44',
            ),
            20 => 
            array (
                'id' => 23,
                'product_id' => NULL,
                'simple_product_id' => 52,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 11:00:19',
                'updated_at' => '2025-02-18 11:03:45',
            ),
            21 => 
            array (
                'id' => 24,
                'product_id' => NULL,
                'simple_product_id' => 53,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 11:19:15',
                'updated_at' => '2025-02-18 11:19:23',
            ),
            22 => 
            array (
                'id' => 25,
                'product_id' => NULL,
                'simple_product_id' => 54,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 11:29:14',
                'updated_at' => '2025-02-18 11:29:14',
            ),
            23 => 
            array (
                'id' => 26,
                'product_id' => NULL,
                'simple_product_id' => 55,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 0,
                'created_at' => '2025-02-18 11:42:45',
                'updated_at' => '2025-02-18 11:42:45',
            ),
            24 => 
            array (
                'id' => 27,
                'product_id' => NULL,
                'simple_product_id' => 57,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 0,
                'created_at' => '2025-02-18 12:21:33',
                'updated_at' => '2025-02-18 12:21:33',
            ),
            25 => 
            array (
                'id' => 28,
                'product_id' => NULL,
                'simple_product_id' => 58,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 12:39:45',
                'updated_at' => '2025-02-18 12:39:45',
            ),
            26 => 
            array (
                'id' => 29,
                'product_id' => NULL,
                'simple_product_id' => 59,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 12:49:27',
                'updated_at' => '2025-02-18 12:49:27',
            ),
            27 => 
            array (
                'id' => 30,
                'product_id' => NULL,
                'simple_product_id' => 60,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 14:12:45',
                'updated_at' => '2025-02-18 14:12:45',
            ),
            28 => 
            array (
                'id' => 31,
                'product_id' => NULL,
                'simple_product_id' => 61,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 14:31:31',
                'updated_at' => '2025-02-18 14:31:31',
            ),
            29 => 
            array (
                'id' => 32,
                'product_id' => NULL,
                'simple_product_id' => 62,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 14:51:04',
                'updated_at' => '2025-02-18 14:51:04',
            ),
            30 => 
            array (
                'id' => 33,
                'product_id' => NULL,
                'simple_product_id' => 63,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 15:40:08',
                'updated_at' => '2025-02-18 15:40:08',
            ),
            31 => 
            array (
                'id' => 34,
                'product_id' => NULL,
                'simple_product_id' => 64,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 15:57:57',
                'updated_at' => '2025-02-18 15:57:57',
            ),
            32 => 
            array (
                'id' => 35,
                'product_id' => NULL,
                'simple_product_id' => 65,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-18 17:09:10',
                'updated_at' => '2025-02-18 17:09:10',
            ),
            33 => 
            array (
                'id' => 36,
                'product_id' => NULL,
                'simple_product_id' => 66,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-19 11:09:47',
                'updated_at' => '2025-02-19 11:09:47',
            ),
            34 => 
            array (
                'id' => 37,
                'product_id' => NULL,
                'simple_product_id' => 67,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-19 11:29:28',
                'updated_at' => '2025-02-19 11:29:28',
            ),
            35 => 
            array (
                'id' => 38,
                'product_id' => NULL,
                'simple_product_id' => 68,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-19 11:42:33',
                'updated_at' => '2025-02-19 11:42:33',
            ),
            36 => 
            array (
                'id' => 39,
                'product_id' => NULL,
                'simple_product_id' => 69,
                'cashback_type' => 'fix',
                'discount_type' => 'flat',
                'discount' => 0.0,
                'enable' => 1,
                'created_at' => '2025-02-19 12:33:24',
                'updated_at' => '2025-02-19 12:33:24',
            ),
        ));
        
        
    }
}