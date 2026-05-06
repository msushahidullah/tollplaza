<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlists')->delete();
        
        \DB::table('wishlists')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'pro_id' => 172,
                'simple_pro_id' => NULL,
                'created_at' => '2025-02-19 15:56:25',
                'updated_at' => '2025-02-19 15:56:25',
                'collection_id' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'pro_id' => 155,
                'simple_pro_id' => NULL,
                'created_at' => '2025-04-18 14:46:52',
                'updated_at' => '2025-04-18 14:46:52',
                'collection_id' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 17,
                'created_at' => '2025-04-18 14:49:24',
                'updated_at' => '2025-04-18 14:49:24',
                'collection_id' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'pro_id' => 127,
                'simple_pro_id' => NULL,
                'created_at' => '2025-04-28 16:08:03',
                'updated_at' => '2025-04-28 16:08:03',
                'collection_id' => NULL,
            ),
            4 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'created_at' => '2025-04-28 16:38:12',
                'updated_at' => '2025-04-28 16:38:12',
                'collection_id' => NULL,
            ),
            5 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 11,
                'created_at' => '2025-04-28 17:29:06',
                'updated_at' => '2025-04-28 17:29:06',
                'collection_id' => NULL,
            ),
            6 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 1,
                'created_at' => '2025-04-28 17:29:12',
                'updated_at' => '2025-04-28 17:29:12',
                'collection_id' => NULL,
            ),
            7 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'pro_id' => 119,
                'simple_pro_id' => NULL,
                'created_at' => '2025-04-28 17:35:31',
                'updated_at' => '2025-04-28 17:35:31',
                'collection_id' => NULL,
            ),
            8 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'pro_id' => 121,
                'simple_pro_id' => NULL,
                'created_at' => '2025-04-28 17:40:08',
                'updated_at' => '2025-04-28 17:40:08',
                'collection_id' => NULL,
            ),
            9 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'pro_id' => 158,
                'simple_pro_id' => NULL,
                'created_at' => '2025-04-29 13:11:28',
                'updated_at' => '2025-04-29 13:11:28',
                'collection_id' => NULL,
            ),
            10 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 50,
                'created_at' => '2025-04-29 13:51:19',
                'updated_at' => '2025-04-29 13:51:19',
                'collection_id' => NULL,
            ),
            11 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'pro_id' => 157,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-20 17:48:36',
                'updated_at' => '2025-09-20 17:48:36',
                'collection_id' => NULL,
            ),
            12 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'pro_id' => 126,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-20 17:57:32',
                'updated_at' => '2025-09-20 17:57:32',
                'collection_id' => NULL,
            ),
            13 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'pro_id' => 168,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-22 10:10:30',
                'updated_at' => '2025-09-22 10:10:30',
                'collection_id' => NULL,
            ),
            14 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'pro_id' => 148,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-22 11:11:39',
                'updated_at' => '2025-09-22 11:11:39',
                'collection_id' => NULL,
            ),
            15 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'pro_id' => 167,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-22 11:11:44',
                'updated_at' => '2025-09-22 11:11:44',
                'collection_id' => NULL,
            ),
            16 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'pro_id' => 171,
                'simple_pro_id' => NULL,
                'created_at' => '2025-09-22 11:11:48',
                'updated_at' => '2025-09-22 11:11:48',
                'collection_id' => NULL,
            ),
        ));
        
        
    }
}