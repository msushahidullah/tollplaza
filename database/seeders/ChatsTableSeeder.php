<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chats')->delete();
        
        \DB::table('chats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => 'HI',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2021-11-23 13:29:35',
                'updated_at' => '2021-11-23 13:29:35',
            ),
            1 => 
            array (
                'id' => 2,
                'message' => 'hello',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2021-11-23 14:25:37',
                'updated_at' => '2021-11-23 14:25:37',
            ),
            2 => 
            array (
                'id' => 3,
                'message' => 'hi',
                'conv_id' => 1,
                'user_id' => 6,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2021-11-23 15:11:22',
                'updated_at' => '2021-11-23 15:11:22',
            ),
            3 => 
            array (
                'id' => 4,
                'message' => 'Hello',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:26:26',
                'updated_at' => '2022-06-18 18:26:26',
            ),
            4 => 
            array (
                'id' => 5,
                'message' => 'Hello',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:26:28',
                'updated_at' => '2022-06-18 18:26:28',
            ),
            5 => 
            array (
                'id' => 6,
                'message' => 'Hello 123',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:34:43',
                'updated_at' => '2022-06-18 18:34:43',
            ),
            6 => 
            array (
                'id' => 7,
                'message' => 'TEst123',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:38:13',
                'updated_at' => '2022-06-18 18:38:13',
            ),
            7 => 
            array (
                'id' => 8,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:50:56',
                'updated_at' => '2022-06-18 18:50:56',
            ),
            8 => 
            array (
                'id' => 9,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 18:51:07',
                'updated_at' => '2022-06-18 18:51:07',
            ),
            9 => 
            array (
                'id' => 10,
                'message' => 'hieelelef',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 20:25:01',
                'updated_at' => '2022-06-18 20:25:01',
            ),
            10 => 
            array (
                'id' => 11,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 20:40:32',
                'updated_at' => '2022-06-18 20:40:32',
            ),
            11 => 
            array (
                'id' => 12,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 20:49:12',
                'updated_at' => '2022-06-18 20:49:12',
            ),
            12 => 
            array (
                'id' => 13,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-18 21:26:49',
                'updated_at' => '2022-06-18 21:26:49',
            ),
            13 => 
            array (
                'id' => 14,
                'message' => 'hello',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-20 20:16:11',
                'updated_at' => '2022-06-20 20:16:11',
            ),
            14 => 
            array (
                'id' => 15,
                'message' => 'okay',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-20 20:24:18',
                'updated_at' => '2022-06-20 20:24:18',
            ),
            15 => 
            array (
                'id' => 16,
                'message' => '1234',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-20 20:43:07',
                'updated_at' => '2022-06-20 20:43:07',
            ),
            16 => 
            array (
                'id' => 17,
                'message' => 'Hell',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 14:53:47',
                'updated_at' => '2022-06-21 14:53:47',
            ),
            17 => 
            array (
                'id' => 18,
                'message' => '12344',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:28:24',
                'updated_at' => '2022-06-21 15:28:24',
            ),
            18 => 
            array (
                'id' => 19,
                'message' => 'OKay',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:42:07',
                'updated_at' => '2022-06-21 15:42:07',
            ),
            19 => 
            array (
                'id' => 20,
                'message' => '123456789',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:47:45',
                'updated_at' => '2022-06-21 15:47:45',
            ),
            20 => 
            array (
                'id' => 21,
                'message' => 'helllo',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:51:20',
                'updated_at' => '2022-06-21 15:51:20',
            ),
            21 => 
            array (
                'id' => 22,
                'message' => 'helllo',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:52:14',
                'updated_at' => '2022-06-21 15:52:14',
            ),
            22 => 
            array (
                'id' => 23,
                'message' => 'helllo',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:52:24',
                'updated_at' => '2022-06-21 15:52:24',
            ),
            23 => 
            array (
                'id' => 24,
                'message' => 'd',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 15:55:36',
                'updated_at' => '2022-06-21 15:55:36',
            ),
            24 => 
            array (
                'id' => 25,
                'message' => 'dd',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:05:13',
                'updated_at' => '2022-06-21 16:05:13',
            ),
            25 => 
            array (
                'id' => 26,
                'message' => 'hello1234555',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:06:51',
                'updated_at' => '2022-06-21 16:06:51',
            ),
            26 => 
            array (
                'id' => 27,
                'message' => 'Helllo test',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:18:55',
                'updated_at' => '2022-06-21 16:18:55',
            ),
            27 => 
            array (
                'id' => 28,
                'message' => 'Helllo test',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:18:59',
                'updated_at' => '2022-06-21 16:18:59',
            ),
            28 => 
            array (
                'id' => 29,
                'message' => 'Helllo test',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:19:04',
                'updated_at' => '2022-06-21 16:19:04',
            ),
            29 => 
            array (
                'id' => 30,
                'message' => 'Test123',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-21 16:24:33',
                'updated_at' => '2022-06-21 16:24:33',
            ),
            30 => 
            array (
                'id' => 31,
                'message' => 'okay',
                'conv_id' => 13,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-28 09:42:00',
                'updated_at' => '2022-06-28 09:42:00',
            ),
            31 => 
            array (
                'id' => 32,
                'message' => 'Helloo Eric',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-28 18:03:31',
                'updated_at' => '2022-06-28 18:03:31',
            ),
            32 => 
            array (
                'id' => 33,
                'message' => 'ok123',
                'conv_id' => 2,
                'user_id' => 23,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2022-06-28 18:04:52',
                'updated_at' => '2022-06-28 18:04:52',
            ),
            33 => 
            array (
                'id' => 34,
                'message' => 'Nice',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-05-20 23:33:01',
                'updated_at' => '2023-05-20 23:33:01',
            ),
            34 => 
            array (
                'id' => 35,
                'message' => 'Ty',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-05-20 23:47:21',
                'updated_at' => '2023-05-20 23:47:21',
            ),
            35 => 
            array (
                'id' => 36,
                'message' => 'Great Mobile',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-05-20 23:48:03',
                'updated_at' => '2023-05-20 23:48:03',
            ),
            36 => 
            array (
                'id' => 37,
                'message' => NULL,
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'media',
                'media' => 'chat_media_16846067193Qm9v9d7RF.png',
                'created_at' => '2023-05-20 23:48:39',
                'updated_at' => '2023-05-20 23:48:39',
            ),
            37 => 
            array (
                'id' => 38,
                'message' => 'Share Your Profile',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-05-20 23:51:14',
                'updated_at' => '2023-05-20 23:51:14',
            ),
            38 => 
            array (
                'id' => 39,
                'message' => 'Fine and You',
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-05-21 00:01:49',
                'updated_at' => '2023-05-21 00:01:49',
            ),
            39 => 
            array (
                'id' => 40,
                'message' => NULL,
                'conv_id' => 2,
                'user_id' => 1,
                'type' => 'media',
                'media' => 'chat_media_1684774716XHcIW8sMXv.png',
                'created_at' => '2023-05-22 22:28:36',
                'updated_at' => '2023-05-22 22:28:36',
            ),
            40 => 
            array (
                'id' => 41,
                'message' => 'hello',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-10-02 17:32:20',
                'updated_at' => '2023-10-02 17:32:20',
            ),
            41 => 
            array (
                'id' => 42,
                'message' => 'hello',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-10-02 17:32:20',
                'updated_at' => '2023-10-02 17:32:20',
            ),
            42 => 
            array (
                'id' => 43,
                'message' => 'how r u',
                'conv_id' => 1,
                'user_id' => 1,
                'type' => 'text',
                'media' => NULL,
                'created_at' => '2023-10-02 17:32:30',
                'updated_at' => '2023-10-02 17:32:30',
            ),
        ));
        
        
    }
}