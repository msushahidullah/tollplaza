<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecialOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('special_offers')->delete();
        
        \DB::table('special_offers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 4,
                'created_at' => '2020-01-20 15:48:51',
                'updated_at' => '2021-09-26 06:30:05',
                'status' => '1',
            ),
            1 => 
            array (
                'id' => 3,
                'pro_id' => NULL,
                'simple_pro_id' => 33,
                'created_at' => '2020-08-02 11:06:02',
                'updated_at' => '2023-09-15 13:39:16',
                'status' => '1',
            ),
            2 => 
            array (
                'id' => 4,
                'pro_id' => 10,
                'simple_pro_id' => 0,
                'created_at' => '2020-08-02 11:06:08',
                'updated_at' => '2021-03-16 10:23:28',
                'status' => '1',
            ),
            3 => 
            array (
                'id' => 5,
                'pro_id' => 87,
                'simple_pro_id' => 0,
                'created_at' => '2020-08-02 11:06:11',
                'updated_at' => '2021-03-16 10:23:29',
                'status' => '1',
            ),
            4 => 
            array (
                'id' => 6,
                'pro_id' => 0,
                'simple_pro_id' => 5,
                'created_at' => '2020-08-02 12:38:28',
                'updated_at' => '2021-09-26 06:30:08',
                'status' => '1',
            ),
            5 => 
            array (
                'id' => 7,
                'pro_id' => 1,
                'simple_pro_id' => NULL,
                'created_at' => '2022-05-11 10:02:31',
                'updated_at' => '2023-09-15 13:39:28',
                'status' => '1',
            ),
        ));
        
        
    }
}