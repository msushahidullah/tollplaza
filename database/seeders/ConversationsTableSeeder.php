<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('conversations')->delete();
        
        \DB::table('conversations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'conv_id' => '42da30f7-650c-4e68-852e-e3fd12296c0e',
                'receiver_id' => 6,
                'sender_id' => 1,
                'created_at' => '2021-11-23 13:29:31',
                'updated_at' => '2021-11-23 13:29:31',
            ),
            1 => 
            array (
                'id' => 2,
                'conv_id' => 'e9c0d3c2-f1a1-4865-be8b-4b1597ed1c43',
                'receiver_id' => 23,
                'sender_id' => 1,
                'created_at' => '2022-06-18 18:25:53',
                'updated_at' => '2022-06-18 18:25:53',
            ),
            2 => 
            array (
                'id' => 3,
                'conv_id' => '637143cb-8c72-46fb-88d5-1d02067f0209',
                'receiver_id' => 34,
                'sender_id' => 1,
                'created_at' => '2022-06-27 19:16:24',
                'updated_at' => '2022-06-27 19:16:24',
            ),
            3 => 
            array (
                'id' => 4,
                'conv_id' => '19c2fff1-9c94-4a10-8f4f-d7b0a4e3ca47',
                'receiver_id' => 30,
                'sender_id' => 1,
                'created_at' => '2022-06-27 19:23:03',
                'updated_at' => '2022-06-27 19:23:03',
            ),
            4 => 
            array (
                'id' => 5,
                'conv_id' => '557b9c5f-8b90-4908-8810-1c280fdca42d',
                'receiver_id' => 25,
                'sender_id' => 1,
                'created_at' => '2022-06-27 20:39:32',
                'updated_at' => '2022-06-27 20:39:32',
            ),
            5 => 
            array (
                'id' => 6,
                'conv_id' => 'd8982060-4a5a-4dba-8b1f-ac2222ab5663',
                'receiver_id' => 21,
                'sender_id' => 23,
                'created_at' => '2022-06-27 21:09:22',
                'updated_at' => '2022-06-27 21:09:22',
            ),
            6 => 
            array (
                'id' => 7,
                'conv_id' => '1d4a8fef-086e-44bc-914a-a62eb7add95e',
                'receiver_id' => 21,
                'sender_id' => 1,
                'created_at' => '2022-06-27 21:09:53',
                'updated_at' => '2022-06-27 21:09:53',
            ),
            7 => 
            array (
                'id' => 8,
                'conv_id' => 'ec1e5613-f5ac-457d-b0c4-4ac11c5cf220',
                'receiver_id' => 28,
                'sender_id' => 23,
                'created_at' => '2022-06-27 21:43:26',
                'updated_at' => '2022-06-27 21:43:26',
            ),
            8 => 
            array (
                'id' => 9,
                'conv_id' => '9ab0da5a-1706-405a-b4fe-373a9352a632',
                'receiver_id' => 6,
                'sender_id' => 23,
                'created_at' => '2022-06-27 21:55:32',
                'updated_at' => '2022-06-27 21:55:32',
            ),
            9 => 
            array (
                'id' => 10,
                'conv_id' => '25dcb815-1fa5-45c0-83f1-f7cf55b7decb',
                'receiver_id' => 26,
                'sender_id' => 23,
                'created_at' => '2022-06-27 22:03:16',
                'updated_at' => '2022-06-27 22:03:16',
            ),
            10 => 
            array (
                'id' => 11,
                'conv_id' => '1b97fd8b-8dc7-410c-9f7c-a83079b05598',
                'receiver_id' => 24,
                'sender_id' => 23,
                'created_at' => '2022-06-27 22:09:08',
                'updated_at' => '2022-06-27 22:09:08',
            ),
            11 => 
            array (
                'id' => 12,
                'conv_id' => '5798a31e-2e7b-4803-905d-ef3b62746414',
                'receiver_id' => 29,
                'sender_id' => 23,
                'created_at' => '2022-06-28 09:35:57',
                'updated_at' => '2022-06-28 09:35:57',
            ),
            12 => 
            array (
                'id' => 13,
                'conv_id' => 'd9707fd7-38b9-4fb3-9d4f-70971289f402',
                'receiver_id' => 33,
                'sender_id' => 23,
                'created_at' => '2022-06-28 09:41:32',
                'updated_at' => '2022-06-28 09:41:32',
            ),
            13 => 
            array (
                'id' => 14,
                'conv_id' => 'e6de638c-b24f-4725-83f4-0448baccdecf',
                'receiver_id' => 28,
                'sender_id' => 1,
                'created_at' => '2023-05-20 22:56:43',
                'updated_at' => '2023-05-20 22:56:43',
            ),
            14 => 
            array (
                'id' => 15,
                'conv_id' => '94fff648-60d2-4a74-8e08-b7ae51eb230e',
                'receiver_id' => 27,
                'sender_id' => 1,
                'created_at' => '2025-04-17 17:45:19',
                'updated_at' => '2025-04-17 17:45:19',
            ),
        ));
        
        
    }
}