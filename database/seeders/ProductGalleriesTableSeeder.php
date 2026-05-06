<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductGalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_galleries')->delete();
        
        \DB::table('product_galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 30,
                'image' => 'product_gallery_6502f0164f14e.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-14 17:05:53',
                'updated_at' => '2023-09-14 17:05:53',
            ),
            1 => 
            array (
                'id' => 3,
                'product_id' => 32,
                'image' => 'product_gallery_6503ef6bbfebe.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-15 11:15:17',
                'updated_at' => '2023-09-15 11:15:17',
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 32,
                'image' => 'product_gallery_6503efd335550.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-15 11:17:00',
                'updated_at' => '2023-09-15 11:17:00',
            ),
            3 => 
            array (
                'id' => 5,
                'product_id' => 33,
                'image' => 'product_gallery_6503f2acbbfdf.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-15 11:29:11',
                'updated_at' => '2023-09-15 11:29:11',
            ),
            4 => 
            array (
                'id' => 6,
                'product_id' => 34,
                'image' => 'product_gallery_6503f713934b8.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-15 11:47:58',
                'updated_at' => '2023-09-15 11:47:58',
            ),
            5 => 
            array (
                'id' => 7,
                'product_id' => 35,
                'image' => 'product_gallery_6503f852e0a01.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-15 11:53:15',
                'updated_at' => '2023-09-15 11:53:15',
            ),
            6 => 
            array (
                'id' => 8,
                'product_id' => 36,
                'image' => 'product_gallery_650522663ca21.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-16 09:05:04',
                'updated_at' => '2023-09-16 09:05:04',
            ),
            7 => 
            array (
                'id' => 9,
                'product_id' => 36,
                'image' => 'product_gallery_6505228ceb2d3.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-16 09:05:42',
                'updated_at' => '2023-09-16 09:05:42',
            ),
            8 => 
            array (
                'id' => 10,
                'product_id' => 36,
                'image' => 'product_gallery_6505228e43058.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-16 09:05:44',
                'updated_at' => '2023-09-16 09:05:44',
            ),
            9 => 
            array (
                'id' => 11,
                'product_id' => 36,
                'image' => 'product_gallery_65052290caffb.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-09-16 09:05:46',
                'updated_at' => '2023-09-16 09:05:46',
            ),
            10 => 
            array (
                'id' => 16,
                'product_id' => 30,
                'image' => 'product_gallery_651be6e6798e3.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-03 15:33:18',
                'updated_at' => '2023-10-03 15:33:18',
            ),
            11 => 
            array (
                'id' => 17,
                'product_id' => 30,
                'image' => 'product_gallery_651be6e693f4d.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-03 15:33:18',
                'updated_at' => '2023-10-03 15:33:18',
            ),
            12 => 
            array (
                'id' => 18,
                'product_id' => 30,
                'image' => 'product_gallery_651be6e6b388a.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-03 15:33:20',
                'updated_at' => '2023-10-03 15:33:20',
            ),
            13 => 
            array (
                'id' => 19,
                'product_id' => 30,
                'image' => 'product_gallery_651be6e8b3e53.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-03 15:33:21',
                'updated_at' => '2023-10-03 15:33:21',
            ),
            14 => 
            array (
                'id' => 20,
                'product_id' => 32,
                'image' => 'product_gallery_651d0c51325c1.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-04 12:25:14',
                'updated_at' => '2023-10-04 12:25:14',
            ),
            15 => 
            array (
                'id' => 21,
                'product_id' => 32,
                'image' => 'product_gallery_651d0c527e88b.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-04 12:25:19',
                'updated_at' => '2023-10-04 12:25:19',
            ),
            16 => 
            array (
                'id' => 22,
                'product_id' => 1,
                'image' => 'product_gallery_651e5561139f2.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:49:13',
                'updated_at' => '2023-10-05 11:49:13',
            ),
            17 => 
            array (
                'id' => 23,
                'product_id' => 1,
                'image' => 'product_gallery_651e55613bb34.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:49:13',
                'updated_at' => '2023-10-05 11:49:13',
            ),
            18 => 
            array (
                'id' => 24,
                'product_id' => 1,
                'image' => 'product_gallery_651e556168a81.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:49:13',
                'updated_at' => '2023-10-05 11:49:13',
            ),
            19 => 
            array (
                'id' => 25,
                'product_id' => 1,
                'image' => 'product_gallery_651e556180de3.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:49:13',
                'updated_at' => '2023-10-05 11:49:13',
            ),
            20 => 
            array (
                'id' => 26,
                'product_id' => 11,
                'image' => 'product_gallery_651e57155111a.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:56:29',
                'updated_at' => '2023-10-05 11:56:29',
            ),
            21 => 
            array (
                'id' => 27,
                'product_id' => 11,
                'image' => 'product_gallery_651e571582fd2.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:56:29',
                'updated_at' => '2023-10-05 11:56:29',
            ),
            22 => 
            array (
                'id' => 28,
                'product_id' => 11,
                'image' => 'product_gallery_651e5715ada3a.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:56:29',
                'updated_at' => '2023-10-05 11:56:29',
            ),
            23 => 
            array (
                'id' => 29,
                'product_id' => 11,
                'image' => 'product_gallery_651e5715d736c.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 11:56:30',
                'updated_at' => '2023-10-05 11:56:30',
            ),
            24 => 
            array (
                'id' => 30,
                'product_id' => 14,
                'image' => 'product_gallery_651e58d02b34a.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:03:52',
                'updated_at' => '2023-10-05 12:03:52',
            ),
            25 => 
            array (
                'id' => 31,
                'product_id' => 14,
                'image' => 'product_gallery_651e58d06492a.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:03:52',
                'updated_at' => '2023-10-05 12:03:52',
            ),
            26 => 
            array (
                'id' => 32,
                'product_id' => 14,
                'image' => 'product_gallery_651e58d0914ce.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:03:52',
                'updated_at' => '2023-10-05 12:03:52',
            ),
            27 => 
            array (
                'id' => 33,
                'product_id' => 14,
                'image' => 'product_gallery_651e58d0c272e.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:03:52',
                'updated_at' => '2023-10-05 12:03:52',
            ),
            28 => 
            array (
                'id' => 35,
                'product_id' => 8,
                'image' => 'product_gallery_651e59ed3aad1.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:08:37',
                'updated_at' => '2023-10-05 12:08:37',
            ),
            29 => 
            array (
                'id' => 38,
                'product_id' => 8,
                'image' => 'product_gallery_651e5a6a6b3c9.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:10:42',
                'updated_at' => '2023-10-05 12:10:42',
            ),
            30 => 
            array (
                'id' => 39,
                'product_id' => 8,
                'image' => 'product_gallery_651e5a6a8a4b7.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:10:42',
                'updated_at' => '2023-10-05 12:10:42',
            ),
            31 => 
            array (
                'id' => 40,
                'product_id' => 8,
                'image' => 'product_gallery_651e5a6aaa598.png',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:10:42',
                'updated_at' => '2023-10-05 12:10:42',
            ),
            32 => 
            array (
                'id' => 41,
                'product_id' => 31,
                'image' => 'product_gallery_651e5e05dbca7.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:26:05',
                'updated_at' => '2023-10-05 12:26:05',
            ),
            33 => 
            array (
                'id' => 42,
                'product_id' => 31,
                'image' => 'product_gallery_651e5e05f38a9.jpeg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:26:06',
                'updated_at' => '2023-10-05 12:26:06',
            ),
            34 => 
            array (
                'id' => 43,
                'product_id' => 31,
                'image' => 'product_gallery_651e5eeec1d87.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-10-05 12:29:58',
                'updated_at' => '2023-10-05 12:29:58',
            ),
            35 => 
            array (
                'id' => 44,
                'product_id' => 37,
                'image' => 'product_gallery_67b2c89a03533.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 10:56:50',
                'updated_at' => '2025-02-17 10:56:50',
            ),
            36 => 
            array (
                'id' => 45,
                'product_id' => 37,
                'image' => 'product_gallery_67b2c89ab7916.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 10:56:52',
                'updated_at' => '2025-02-17 10:56:52',
            ),
            37 => 
            array (
                'id' => 46,
                'product_id' => 37,
                'image' => 'product_gallery_67b2c89c167a7.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 10:56:53',
                'updated_at' => '2025-02-17 10:56:53',
            ),
            38 => 
            array (
                'id' => 47,
                'product_id' => 38,
                'image' => 'product_gallery_67b2cb83ab753.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 11:09:16',
                'updated_at' => '2025-02-17 11:09:16',
            ),
            39 => 
            array (
                'id' => 48,
                'product_id' => 39,
                'image' => 'product_gallery_67b2d1f030a5b.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 11:36:43',
                'updated_at' => '2025-02-17 11:36:43',
            ),
            40 => 
            array (
                'id' => 49,
                'product_id' => 39,
                'image' => 'product_gallery_67b2d1f38c48c.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 11:36:44',
                'updated_at' => '2025-02-17 11:36:44',
            ),
            41 => 
            array (
                'id' => 50,
                'product_id' => 40,
                'image' => 'product_gallery_67b2db67177fe.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 12:17:04',
                'updated_at' => '2025-02-17 12:17:04',
            ),
            42 => 
            array (
                'id' => 51,
                'product_id' => 40,
                'image' => 'product_gallery_67b2db68e5ada.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 12:17:06',
                'updated_at' => '2025-02-17 12:17:06',
            ),
            43 => 
            array (
                'id' => 52,
                'product_id' => 41,
                'image' => 'product_gallery_67b313245e22d.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 16:14:55',
                'updated_at' => '2025-02-17 16:14:55',
            ),
            44 => 
            array (
                'id' => 53,
                'product_id' => 42,
                'image' => 'product_gallery_67b318581a9cf.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 16:37:08',
                'updated_at' => '2025-02-17 16:37:08',
            ),
            45 => 
            array (
                'id' => 54,
                'product_id' => 43,
                'image' => 'product_gallery_67b31d9da0b79.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 16:59:35',
                'updated_at' => '2025-02-17 16:59:35',
            ),
            46 => 
            array (
                'id' => 55,
                'product_id' => 44,
                'image' => 'product_gallery_67b32072d2873.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 17:11:39',
                'updated_at' => '2025-02-17 17:11:39',
            ),
            47 => 
            array (
                'id' => 56,
                'product_id' => 45,
                'image' => 'product_gallery_67b32301ce6e5.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 17:22:35',
                'updated_at' => '2025-02-17 17:22:35',
            ),
            48 => 
            array (
                'id' => 57,
                'product_id' => 46,
                'image' => 'product_gallery_67b32686ee14c.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 17:37:35',
                'updated_at' => '2025-02-17 17:37:35',
            ),
            49 => 
            array (
                'id' => 58,
                'product_id' => 46,
                'image' => 'product_gallery_67b32687e1db8.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 17:37:37',
                'updated_at' => '2025-02-17 17:37:37',
            ),
            50 => 
            array (
                'id' => 59,
                'product_id' => 47,
                'image' => 'product_gallery_67b328cd30392.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-17 17:47:18',
                'updated_at' => '2025-02-17 17:47:18',
            ),
            51 => 
            array (
                'id' => 60,
                'product_id' => 48,
                'image' => 'product_gallery_67b40dd093780.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 10:04:26',
                'updated_at' => '2025-02-18 10:04:26',
            ),
            52 => 
            array (
                'id' => 61,
                'product_id' => 49,
                'image' => 'product_gallery_67b410370f1d5.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 10:14:40',
                'updated_at' => '2025-02-18 10:14:40',
            ),
            53 => 
            array (
                'id' => 62,
                'product_id' => 50,
                'image' => 'product_gallery_67b4131465368.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 10:26:53',
                'updated_at' => '2025-02-18 10:26:53',
            ),
            54 => 
            array (
                'id' => 63,
                'product_id' => 51,
                'image' => 'product_gallery_67b4178e5f308.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 10:46:01',
                'updated_at' => '2025-02-18 10:46:01',
            ),
            55 => 
            array (
                'id' => 64,
                'product_id' => 52,
                'image' => 'product_gallery_67b41a46080bc.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 10:57:35',
                'updated_at' => '2025-02-18 10:57:35',
            ),
            56 => 
            array (
                'id' => 65,
                'product_id' => 53,
                'image' => 'product_gallery_67b41f347a4e8.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 11:18:37',
                'updated_at' => '2025-02-18 11:18:37',
            ),
            57 => 
            array (
                'id' => 66,
                'product_id' => 54,
                'image' => 'product_gallery_67b4219016207.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 11:28:41',
                'updated_at' => '2025-02-18 11:28:41',
            ),
            58 => 
            array (
                'id' => 67,
                'product_id' => 55,
                'image' => 'product_gallery_67b424bfc07ed.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 11:42:17',
                'updated_at' => '2025-02-18 11:42:17',
            ),
            59 => 
            array (
                'id' => 68,
                'product_id' => 56,
                'image' => 'product_gallery_67b429528e139.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 12:01:50',
                'updated_at' => '2025-02-18 12:01:50',
            ),
            60 => 
            array (
                'id' => 69,
                'product_id' => 57,
                'image' => 'product_gallery_67b42dbd0ef9b.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 12:20:42',
                'updated_at' => '2025-02-18 12:20:42',
            ),
            61 => 
            array (
                'id' => 70,
                'product_id' => 58,
                'image' => 'product_gallery_67b4321dd53ee.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 12:39:19',
                'updated_at' => '2025-02-18 12:39:19',
            ),
            62 => 
            array (
                'id' => 71,
                'product_id' => 59,
                'image' => 'product_gallery_67b434637bd55.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 12:49:02',
                'updated_at' => '2025-02-18 12:49:02',
            ),
            63 => 
            array (
                'id' => 72,
                'product_id' => 60,
                'image' => 'product_gallery_67b44769d9d9b.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 14:10:10',
                'updated_at' => '2025-02-18 14:10:10',
            ),
            64 => 
            array (
                'id' => 73,
                'product_id' => 60,
                'image' => 'product_gallery_67b4476ae44e5.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 14:10:11',
                'updated_at' => '2025-02-18 14:10:11',
            ),
            65 => 
            array (
                'id' => 74,
                'product_id' => 61,
                'image' => 'product_gallery_67b44c3caf0d5.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 14:30:45',
                'updated_at' => '2025-02-18 14:30:45',
            ),
            66 => 
            array (
                'id' => 75,
                'product_id' => 62,
                'image' => 'product_gallery_67b4507c98a0e.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 14:48:56',
                'updated_at' => '2025-02-18 14:48:56',
            ),
            67 => 
            array (
                'id' => 76,
                'product_id' => 63,
                'image' => 'product_gallery_67b45c5adc73d.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 15:39:31',
                'updated_at' => '2025-02-18 15:39:31',
            ),
            68 => 
            array (
                'id' => 77,
                'product_id' => 63,
                'image' => 'product_gallery_67b45c5bdd4fc.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 15:39:32',
                'updated_at' => '2025-02-18 15:39:32',
            ),
            69 => 
            array (
                'id' => 78,
                'product_id' => 64,
                'image' => 'product_gallery_67b4604663323.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 15:56:15',
                'updated_at' => '2025-02-18 15:56:15',
            ),
            70 => 
            array (
                'id' => 79,
                'product_id' => 65,
                'image' => 'product_gallery_67b46a1247e4b.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-18 16:38:02',
                'updated_at' => '2025-02-18 16:38:02',
            ),
            71 => 
            array (
                'id' => 80,
                'product_id' => 66,
                'image' => 'product_gallery_67b56e67aaf66.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-19 11:08:48',
                'updated_at' => '2025-02-19 11:08:48',
            ),
            72 => 
            array (
                'id' => 81,
                'product_id' => 67,
                'image' => 'product_gallery_67b5730d6ee94.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-19 11:28:40',
                'updated_at' => '2025-02-19 11:28:40',
            ),
            73 => 
            array (
                'id' => 82,
                'product_id' => 68,
                'image' => 'product_gallery_67b575fbee740.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-19 11:41:08',
                'updated_at' => '2025-02-19 11:41:08',
            ),
            74 => 
            array (
                'id' => 83,
                'product_id' => 69,
                'image' => 'product_gallery_67b581909f52d.jpg',
                'deleted_at' => NULL,
                'created_at' => '2025-02-19 12:30:34',
                'updated_at' => '2025-02-19 12:30:34',
            ),
        ));
        
        
    }
}