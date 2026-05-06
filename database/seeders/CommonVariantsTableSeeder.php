<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommonVariantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('common_variants')->delete();
        
        \DB::table('common_variants')->insert(array (
            0 => 
            array (
                'id' => 3,
                'cm_attr_id' => 1,
                'cm_attr_val' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-20 15:11:44',
                'updated_at' => '2020-01-20 15:11:44',
            ),
            1 => 
            array (
                'id' => 4,
                'cm_attr_id' => 1,
                'cm_attr_val' => 1,
                'pro_id' => 91,
                'created_at' => '2020-07-07 17:53:41',
                'updated_at' => '2020-07-07 17:53:41',
            ),
            2 => 
            array (
                'id' => 5,
                'cm_attr_id' => 3,
                'cm_attr_val' => 15,
                'pro_id' => 92,
                'created_at' => '2020-07-07 18:02:31',
                'updated_at' => '2020-07-07 18:02:31',
            ),
            3 => 
            array (
                'id' => 11,
                'cm_attr_id' => 3,
                'cm_attr_val' => 12,
                'pro_id' => 149,
                'created_at' => '2020-08-11 13:14:51',
                'updated_at' => '2020-08-18 02:24:07',
            ),
            4 => 
            array (
                'id' => 12,
                'cm_attr_id' => 6,
                'cm_attr_val' => 30,
                'pro_id' => 159,
                'created_at' => '2021-11-17 16:35:20',
                'updated_at' => '2021-11-17 16:35:20',
            ),
            5 => 
            array (
                'id' => 13,
                'cm_attr_id' => 1,
                'cm_attr_val' => 1,
                'pro_id' => 161,
                'created_at' => '2022-08-01 15:08:25',
                'updated_at' => '2022-08-01 15:08:25',
            ),
            6 => 
            array (
                'id' => 15,
                'cm_attr_id' => 1,
                'cm_attr_val' => 3,
                'pro_id' => 16,
                'created_at' => '2023-10-04 14:03:42',
                'updated_at' => '2023-10-04 14:03:42',
            ),
            7 => 
            array (
                'id' => 18,
                'cm_attr_id' => 1,
                'cm_attr_val' => 57,
                'pro_id' => 23,
                'created_at' => '2023-10-04 17:08:56',
                'updated_at' => '2023-10-04 17:08:56',
            ),
            8 => 
            array (
                'id' => 19,
                'cm_attr_id' => 1,
                'cm_attr_val' => 1,
                'pro_id' => 24,
                'created_at' => '2023-10-04 17:22:20',
                'updated_at' => '2023-10-04 17:22:20',
            ),
            9 => 
            array (
                'id' => 20,
                'cm_attr_id' => 1,
                'cm_attr_val' => 38,
                'pro_id' => 25,
                'created_at' => '2023-10-04 17:41:02',
                'updated_at' => '2023-10-04 17:41:02',
            ),
            10 => 
            array (
                'id' => 21,
                'cm_attr_id' => 1,
                'cm_attr_val' => 38,
                'pro_id' => 26,
                'created_at' => '2023-10-04 17:53:25',
                'updated_at' => '2023-10-04 17:53:25',
            ),
        ));
        
        
    }
}