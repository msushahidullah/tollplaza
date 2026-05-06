<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MostsearchedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mostsearcheds')->delete();
        
        \DB::table('mostsearcheds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'keyword' => 'clot',
                'count' => 1,
                'created_at' => '2021-11-21 22:40:26',
                'updated_at' => '2021-11-21 22:40:26',
            ),
            1 => 
            array (
                'id' => 2,
                'keyword' => 'cloth',
                'count' => 4,
                'created_at' => '2021-11-21 22:40:27',
                'updated_at' => '2021-11-21 22:41:10',
            ),
            2 => 
            array (
                'id' => 3,
                'keyword' => 'a',
                'count' => 7,
                'created_at' => '2021-11-23 18:19:16',
                'updated_at' => '2023-05-27 00:27:36',
            ),
            3 => 
            array (
                'id' => 4,
                'keyword' => 'samsub',
                'count' => 1,
                'created_at' => '2021-11-23 18:19:22',
                'updated_at' => '2021-11-23 18:19:22',
            ),
            4 => 
            array (
                'id' => 5,
                'keyword' => 'samsu',
                'count' => 3,
                'created_at' => '2021-11-23 18:19:23',
                'updated_at' => '2022-06-14 12:24:45',
            ),
            5 => 
            array (
                'id' => 6,
                'keyword' => 'samsung',
                'count' => 37,
                'created_at' => '2021-11-23 18:19:23',
                'updated_at' => '2022-06-14 17:21:37',
            ),
            6 => 
            array (
                'id' => 7,
                'keyword' => 'samsun',
                'count' => 13,
                'created_at' => '2021-11-23 18:20:20',
                'updated_at' => '2022-06-14 17:14:16',
            ),
            7 => 
            array (
                'id' => 8,
                'keyword' => 'sam',
                'count' => 25,
                'created_at' => '2021-11-23 18:20:21',
                'updated_at' => '2022-06-14 17:21:34',
            ),
            8 => 
            array (
                'id' => 9,
                'keyword' => 's',
                'count' => 20,
                'created_at' => '2021-11-23 18:20:22',
                'updated_at' => '2023-10-05 11:47:25',
            ),
            9 => 
            array (
                'id' => 10,
                'keyword' => 'सैमसंग',
                'count' => 1,
                'created_at' => '2021-12-03 11:11:27',
                'updated_at' => '2021-12-03 11:11:27',
            ),
            10 => 
            array (
                'id' => 11,
                'keyword' => 'boy',
                'count' => 2,
                'created_at' => '2021-12-04 18:11:18',
                'updated_at' => '2021-12-04 18:11:18',
            ),
            11 => 
            array (
                'id' => 12,
                'keyword' => 'hello',
                'count' => 2,
                'created_at' => '2021-12-16 10:41:50',
                'updated_at' => '2021-12-16 10:41:50',
            ),
            12 => 
            array (
                'id' => 13,
                'keyword' => 'this is',
                'count' => 1,
                'created_at' => '2022-03-03 10:31:19',
                'updated_at' => '2022-03-03 10:31:19',
            ),
            13 => 
            array (
                'id' => 14,
                'keyword' => 'this is test',
                'count' => 1,
                'created_at' => '2022-03-03 10:31:20',
                'updated_at' => '2022-03-03 10:31:20',
            ),
            14 => 
            array (
                'id' => 15,
                'keyword' => 'this is testin',
                'count' => 1,
                'created_at' => '2022-03-03 10:31:23',
                'updated_at' => '2022-03-03 10:31:23',
            ),
            15 => 
            array (
                'id' => 16,
                'keyword' => 'this is testing',
                'count' => 2,
                'created_at' => '2022-03-03 10:31:24',
                'updated_at' => '2022-03-03 10:31:24',
            ),
            16 => 
            array (
                'id' => 17,
                'keyword' => 'jnkdfv',
                'count' => 1,
                'created_at' => '2022-03-03 10:38:00',
                'updated_at' => '2022-03-03 10:38:00',
            ),
            17 => 
            array (
                'id' => 18,
                'keyword' => 't',
                'count' => 1,
                'created_at' => '2022-03-04 10:15:18',
                'updated_at' => '2022-03-04 10:15:18',
            ),
            18 => 
            array (
                'id' => 19,
                'keyword' => 'test',
                'count' => 4,
                'created_at' => '2022-03-04 10:15:19',
                'updated_at' => '2022-05-11 10:46:04',
            ),
            19 => 
            array (
                'id' => 20,
                'keyword' => 'tes',
                'count' => 2,
                'created_at' => '2022-03-04 10:15:20',
                'updated_at' => '2022-05-11 10:44:57',
            ),
            20 => 
            array (
                'id' => 21,
                'keyword' => 'testin',
                'count' => 1,
                'created_at' => '2022-03-04 10:15:20',
                'updated_at' => '2022-03-04 10:15:20',
            ),
            21 => 
            array (
                'id' => 22,
                'keyword' => 'testi',
                'count' => 1,
                'created_at' => '2022-03-04 10:15:21',
                'updated_at' => '2022-03-04 10:15:21',
            ),
            22 => 
            array (
                'id' => 23,
                'keyword' => 'testing',
                'count' => 2,
                'created_at' => '2022-03-04 10:15:22',
                'updated_at' => '2022-03-04 10:15:25',
            ),
            23 => 
            array (
                'id' => 24,
                'keyword' => 'Crew neck top with inlay',
                'count' => 2,
                'created_at' => '2022-03-18 00:41:45',
                'updated_at' => '2022-03-18 00:41:45',
            ),
            24 => 
            array (
                'id' => 25,
                'keyword' => 'i',
                'count' => 13,
                'created_at' => '2022-04-01 08:24:27',
                'updated_at' => '2023-05-25 23:06:24',
            ),
            25 => 
            array (
                'id' => 26,
                'keyword' => 'it',
                'count' => 7,
                'created_at' => '2022-04-01 08:24:28',
                'updated_at' => '2022-06-22 19:30:03',
            ),
            26 => 
            array (
                'id' => 27,
                'keyword' => 'ita',
                'count' => 2,
                'created_at' => '2022-04-01 08:24:29',
                'updated_at' => '2023-05-25 23:04:40',
            ),
            27 => 
            array (
                'id' => 28,
                'keyword' => 'itab',
                'count' => 19,
                'created_at' => '2022-04-01 08:24:30',
                'updated_at' => '2023-05-25 23:04:42',
            ),
            28 => 
            array (
                'id' => 29,
                'keyword' => 'Hot Wheels',
                'count' => 2,
                'created_at' => '2022-05-11 10:39:49',
                'updated_at' => '2022-05-11 10:39:51',
            ),
            29 => 
            array (
                'id' => 30,
                'keyword' => 'm',
                'count' => 5,
                'created_at' => '2022-05-18 10:42:26',
                'updated_at' => '2023-06-20 00:27:48',
            ),
            30 => 
            array (
                'id' => 31,
                'keyword' => 'me',
                'count' => 2,
                'created_at' => '2022-05-18 10:42:29',
                'updated_at' => '2022-06-01 13:45:04',
            ),
            31 => 
            array (
                'id' => 32,
                'keyword' => 'men',
                'count' => 3,
                'created_at' => '2022-05-18 10:42:32',
                'updated_at' => '2022-07-06 15:03:56',
            ),
            32 => 
            array (
                'id' => 33,
                'keyword' => 'men\'',
                'count' => 1,
                'created_at' => '2022-05-18 10:42:34',
                'updated_at' => '2022-05-18 10:42:34',
            ),
            33 => 
            array (
                'id' => 34,
                'keyword' => 'men\'s',
                'count' => 3,
                'created_at' => '2022-05-18 10:42:36',
                'updated_at' => '2022-07-06 15:03:51',
            ),
            34 => 
            array (
                'id' => 35,
                'keyword' => 'ma',
                'count' => 3,
                'created_at' => '2022-06-01 13:45:16',
                'updated_at' => '2023-06-20 00:27:49',
            ),
            35 => 
            array (
                'id' => 36,
                'keyword' => 'mag',
                'count' => 2,
                'created_at' => '2022-06-01 13:45:18',
                'updated_at' => '2023-05-25 23:01:45',
            ),
            36 => 
            array (
                'id' => 37,
                'keyword' => '2 searte',
                'count' => 1,
                'created_at' => '2022-06-07 12:27:17',
                'updated_at' => '2022-06-07 12:27:17',
            ),
            37 => 
            array (
                'id' => 38,
                'keyword' => '2 sea',
                'count' => 1,
                'created_at' => '2022-06-07 12:27:19',
                'updated_at' => '2022-06-07 12:27:19',
            ),
            38 => 
            array (
                'id' => 39,
                'keyword' => '2 searer',
                'count' => 1,
                'created_at' => '2022-06-07 12:27:21',
                'updated_at' => '2022-06-07 12:27:21',
            ),
            39 => 
            array (
                'id' => 40,
                'keyword' => '2 seater',
                'count' => 1,
                'created_at' => '2022-06-07 12:27:23',
                'updated_at' => '2022-06-07 12:27:23',
            ),
            40 => 
            array (
                'id' => 41,
                'keyword' => '2 Seater Sofa',
                'count' => 2,
                'created_at' => '2022-06-07 12:27:47',
                'updated_at' => '2022-06-07 12:28:00',
            ),
            41 => 
            array (
                'id' => 42,
                'keyword' => 'Sunglasses',
                'count' => 4,
                'created_at' => '2022-06-07 17:22:18',
                'updated_at' => '2022-06-08 13:18:03',
            ),
            42 => 
            array (
                'id' => 43,
                'keyword' => 'Sun',
                'count' => 6,
                'created_at' => '2022-06-08 11:25:18',
                'updated_at' => '2022-08-01 10:11:07',
            ),
            43 => 
            array (
                'id' => 44,
                'keyword' => 'Sunglass',
                'count' => 7,
                'created_at' => '2022-06-08 11:25:20',
                'updated_at' => '2022-08-01 10:11:08',
            ),
            44 => 
            array (
                'id' => 45,
                'keyword' => 'Sunglas',
                'count' => 8,
                'created_at' => '2022-06-08 11:25:33',
                'updated_at' => '2022-08-01 10:11:11',
            ),
            45 => 
            array (
                'id' => 46,
                'keyword' => 'Sungla',
                'count' => 2,
                'created_at' => '2022-06-08 11:25:47',
                'updated_at' => '2022-06-08 13:19:08',
            ),
            46 => 
            array (
                'id' => 47,
                'keyword' => 'Samsung Galaxy m31',
                'count' => 3,
                'created_at' => '2022-06-14 10:23:08',
                'updated_at' => '2022-06-14 10:35:29',
            ),
            47 => 
            array (
                'id' => 48,
                'keyword' => 'Samsung Galaxy m3',
                'count' => 2,
                'created_at' => '2022-06-14 10:24:27',
                'updated_at' => '2022-06-14 10:35:36',
            ),
            48 => 
            array (
                'id' => 49,
                'keyword' => 'Samsung Galax',
                'count' => 1,
                'created_at' => '2022-06-14 10:24:34',
                'updated_at' => '2022-06-14 10:24:34',
            ),
            49 => 
            array (
                'id' => 50,
                'keyword' => 'iTab1',
                'count' => 10,
                'created_at' => '2022-06-14 10:26:30',
                'updated_at' => '2022-06-14 17:21:24',
            ),
            50 => 
            array (
                'id' => 51,
                'keyword' => 'samsung ga',
                'count' => 1,
                'created_at' => '2022-06-14 10:34:12',
                'updated_at' => '2022-06-14 10:34:12',
            ),
            51 => 
            array (
                'id' => 52,
                'keyword' => 'samsung gal',
                'count' => 3,
                'created_at' => '2022-06-14 10:34:13',
                'updated_at' => '2022-06-14 10:37:34',
            ),
            52 => 
            array (
                'id' => 53,
                'keyword' => 'Sa',
                'count' => 13,
                'created_at' => '2022-06-14 10:37:30',
                'updated_at' => '2022-06-14 16:58:08',
            ),
            53 => 
            array (
                'id' => 54,
                'keyword' => 'Samsung G',
                'count' => 3,
                'created_at' => '2022-06-14 10:39:16',
                'updated_at' => '2022-06-14 10:42:24',
            ),
            54 => 
            array (
                'id' => 55,
                'keyword' => 'itab2',
                'count' => 1,
                'created_at' => '2022-06-14 10:41:31',
                'updated_at' => '2022-06-14 10:41:31',
            ),
            55 => 
            array (
                'id' => 56,
                'keyword' => 'Sams',
                'count' => 9,
                'created_at' => '2022-06-14 10:42:20',
                'updated_at' => '2022-06-14 17:06:39',
            ),
            56 => 
            array (
                'id' => 57,
                'keyword' => 'San',
                'count' => 1,
                'created_at' => '2022-06-14 12:19:50',
                'updated_at' => '2022-06-14 12:19:50',
            ),
            57 => 
            array (
                'id' => 58,
                'keyword' => 'd',
                'count' => 1,
                'created_at' => '2022-06-14 13:01:34',
                'updated_at' => '2022-06-14 13:01:34',
            ),
            58 => 
            array (
                'id' => 59,
                'keyword' => 'amsung',
                'count' => 1,
                'created_at' => '2022-06-14 16:52:57',
                'updated_at' => '2022-06-14 16:52:57',
            ),
            59 => 
            array (
                'id' => 60,
                'keyword' => 'iTeb',
                'count' => 1,
                'created_at' => '2022-06-14 17:20:59',
                'updated_at' => '2022-06-14 17:20:59',
            ),
            60 => 
            array (
                'id' => 61,
                'keyword' => 'iTeb1',
                'count' => 1,
                'created_at' => '2022-06-14 17:21:00',
                'updated_at' => '2022-06-14 17:21:00',
            ),
            61 => 
            array (
                'id' => 62,
                'keyword' => 'iab',
                'count' => 1,
                'created_at' => '2022-06-14 17:21:21',
                'updated_at' => '2022-06-14 17:21:21',
            ),
            62 => 
            array (
                'id' => 63,
                'keyword' => 'samsunge',
                'count' => 1,
                'created_at' => '2022-06-14 17:21:36',
                'updated_at' => '2022-06-14 17:21:36',
            ),
            63 => 
            array (
                'id' => 64,
                'keyword' => 'Hat',
                'count' => 4,
                'created_at' => '2022-06-16 21:04:45',
                'updated_at' => '2022-06-17 13:02:37',
            ),
            64 => 
            array (
                'id' => 65,
                'keyword' => 'se',
                'count' => 1,
                'created_at' => '2022-06-22 15:56:51',
                'updated_at' => '2022-06-22 15:56:51',
            ),
            65 => 
            array (
                'id' => 66,
                'keyword' => 'seller',
                'count' => 1,
                'created_at' => '2022-06-22 15:56:54',
                'updated_at' => '2022-06-22 15:56:54',
            ),
            66 => 
            array (
                'id' => 67,
                'keyword' => 'seller01',
                'count' => 1,
                'created_at' => '2022-06-22 15:56:56',
                'updated_at' => '2022-06-22 15:56:56',
            ),
            67 => 
            array (
                'id' => 68,
                'keyword' => 'seller0',
                'count' => 1,
                'created_at' => '2022-06-22 15:57:02',
                'updated_at' => '2022-06-22 15:57:02',
            ),
            68 => 
            array (
                'id' => 69,
                'keyword' => 'J',
                'count' => 1,
                'created_at' => '2022-07-05 19:15:35',
                'updated_at' => '2022-07-05 19:15:35',
            ),
            69 => 
            array (
                'id' => 70,
                'keyword' => 'Jacket with hood',
                'count' => 2,
                'created_at' => '2022-07-05 19:15:43',
                'updated_at' => '2022-07-05 19:15:46',
            ),
            70 => 
            array (
                'id' => 71,
                'keyword' => 'Pants',
                'count' => 2,
                'created_at' => '2022-07-05 19:24:37',
                'updated_at' => '2022-07-05 19:24:39',
            ),
            71 => 
            array (
                'id' => 72,
                'keyword' => 'Pants with',
                'count' => 1,
                'created_at' => '2022-07-05 19:24:42',
                'updated_at' => '2022-07-05 19:24:42',
            ),
            72 => 
            array (
                'id' => 73,
                'keyword' => 'Mens',
                'count' => 2,
                'created_at' => '2022-07-06 15:03:36',
                'updated_at' => '2022-07-06 15:03:46',
            ),
            73 => 
            array (
                'id' => 74,
                'keyword' => 'Mens\'s',
                'count' => 1,
                'created_at' => '2022-07-06 15:03:38',
                'updated_at' => '2022-07-06 15:03:38',
            ),
            74 => 
            array (
                'id' => 75,
                'keyword' => 'Mens\'',
                'count' => 1,
                'created_at' => '2022-07-06 15:03:41',
                'updated_at' => '2022-07-06 15:03:41',
            ),
            75 => 
            array (
                'id' => 76,
                'keyword' => 'Women’s Leggings',
                'count' => 3,
                'created_at' => '2022-07-07 17:24:24',
                'updated_at' => '2022-07-07 17:25:22',
            ),
            76 => 
            array (
                'id' => 77,
                'keyword' => 'Lenovo ThinkPad',
                'count' => 1,
                'created_at' => '2022-07-11 15:03:17',
                'updated_at' => '2022-07-11 15:03:17',
            ),
            77 => 
            array (
                'id' => 78,
                'keyword' => 'Su',
                'count' => 1,
                'created_at' => '2022-08-01 10:11:06',
                'updated_at' => '2022-08-01 10:11:06',
            ),
            78 => 
            array (
                'id' => 79,
                'keyword' => 'y',
                'count' => 2,
                'created_at' => '2022-11-21 11:27:52',
                'updated_at' => '2022-11-21 11:28:18',
            ),
            79 => 
            array (
                'id' => 80,
                'keyword' => 'yo',
                'count' => 1,
                'created_at' => '2022-11-21 11:27:52',
                'updated_at' => '2022-11-21 11:27:52',
            ),
            80 => 
            array (
                'id' => 81,
                'keyword' => 'yog',
                'count' => 1,
                'created_at' => '2022-11-21 11:27:53',
                'updated_at' => '2022-11-21 11:27:53',
            ),
            81 => 
            array (
                'id' => 82,
                'keyword' => 'yoga',
                'count' => 2,
                'created_at' => '2022-11-21 11:27:56',
                'updated_at' => '2022-11-21 11:28:03',
            ),
            82 => 
            array (
                'id' => 83,
                'keyword' => 'yoga ma',
                'count' => 3,
                'created_at' => '2022-11-21 11:28:04',
                'updated_at' => '2022-11-21 11:28:22',
            ),
            83 => 
            array (
                'id' => 84,
                'keyword' => 'yoga mat',
                'count' => 1,
                'created_at' => '2022-11-21 11:28:04',
                'updated_at' => '2022-11-21 11:28:04',
            ),
            84 => 
            array (
                'id' => 85,
                'keyword' => 'yoga matt',
                'count' => 3,
                'created_at' => '2022-11-21 11:28:08',
                'updated_at' => '2022-11-21 11:28:23',
            ),
            85 => 
            array (
                'id' => 86,
                'keyword' => 'Yoga M',
                'count' => 1,
                'created_at' => '2022-11-21 11:28:19',
                'updated_at' => '2022-11-21 11:28:19',
            ),
            86 => 
            array (
                'id' => 87,
                'keyword' => 'iphone',
                'count' => 9,
                'created_at' => '2023-03-25 00:17:39',
                'updated_at' => '2023-03-29 16:41:34',
            ),
            87 => 
            array (
                'id' => 88,
                'keyword' => 'iphon',
                'count' => 4,
                'created_at' => '2023-03-28 22:05:54',
                'updated_at' => '2023-03-28 22:34:31',
            ),
            88 => 
            array (
                'id' => 89,
                'keyword' => 'ipho',
                'count' => 4,
                'created_at' => '2023-03-28 22:08:30',
                'updated_at' => '2023-05-25 23:06:26',
            ),
            89 => 
            array (
                'id' => 90,
                'keyword' => 'ip',
                'count' => 7,
                'created_at' => '2023-03-28 22:47:36',
                'updated_at' => '2023-05-25 23:06:25',
            ),
            90 => 
            array (
                'id' => 91,
                'keyword' => 'iph',
                'count' => 4,
                'created_at' => '2023-03-28 22:48:17',
                'updated_at' => '2023-03-29 16:41:57',
            ),
            91 => 
            array (
                'id' => 92,
                'keyword' => 'ih',
                'count' => 1,
                'created_at' => '2023-03-29 17:59:50',
                'updated_at' => '2023-03-29 17:59:50',
            ),
            92 => 
            array (
                'id' => 93,
                'keyword' => 'Maggi Masala Ae Magic 6',
                'count' => 1,
                'created_at' => '2023-05-14 16:04:21',
                'updated_at' => '2023-05-14 16:04:21',
            ),
            93 => 
            array (
                'id' => 94,
                'keyword' => 'fa',
                'count' => 1,
                'created_at' => '2023-05-25 23:37:20',
                'updated_at' => '2023-05-25 23:37:20',
            ),
            94 => 
            array (
                'id' => 95,
                'keyword' => 'fash',
                'count' => 1,
                'created_at' => '2023-05-25 23:37:20',
                'updated_at' => '2023-05-25 23:37:20',
            ),
            95 => 
            array (
                'id' => 96,
                'keyword' => 'H',
                'count' => 1,
                'created_at' => '2023-05-25 23:37:41',
                'updated_at' => '2023-05-25 23:37:41',
            ),
            96 => 
            array (
                'id' => 97,
                'keyword' => 'HP',
                'count' => 1,
                'created_at' => '2023-05-25 23:37:42',
                'updated_at' => '2023-05-25 23:37:42',
            ),
            97 => 
            array (
                'id' => 98,
                'keyword' => 'ap',
                'count' => 9,
                'created_at' => '2023-05-26 10:18:27',
                'updated_at' => '2023-05-27 00:27:37',
            ),
            98 => 
            array (
                'id' => 99,
                'keyword' => 'app',
                'count' => 7,
                'created_at' => '2023-05-26 14:39:49',
                'updated_at' => '2023-05-26 14:46:49',
            ),
            99 => 
            array (
                'id' => 100,
                'keyword' => 'N',
                'count' => 2,
                'created_at' => '2023-06-20 00:03:19',
                'updated_at' => '2023-06-20 00:03:26',
            ),
            100 => 
            array (
                'id' => 101,
                'keyword' => 'Noo',
                'count' => 1,
                'created_at' => '2023-06-20 00:03:20',
                'updated_at' => '2023-06-20 00:03:20',
            ),
            101 => 
            array (
                'id' => 102,
                'keyword' => 'g',
                'count' => 2,
                'created_at' => '2023-06-20 00:03:40',
                'updated_at' => '2023-10-05 12:30:40',
            ),
            102 => 
            array (
                'id' => 103,
                'keyword' => 'gr',
                'count' => 1,
                'created_at' => '2023-06-20 00:03:41',
                'updated_at' => '2023-06-20 00:03:41',
            ),
            103 => 
            array (
                'id' => 104,
                'keyword' => 'gro',
                'count' => 1,
                'created_at' => '2023-06-20 00:03:42',
                'updated_at' => '2023-06-20 00:03:42',
            ),
            104 => 
            array (
                'id' => 105,
                'keyword' => 'groc',
                'count' => 1,
                'created_at' => '2023-06-20 00:03:44',
                'updated_at' => '2023-06-20 00:03:44',
            ),
            105 => 
            array (
                'id' => 106,
                'keyword' => 'magg',
                'count' => 1,
                'created_at' => '2023-06-20 00:27:49',
                'updated_at' => '2023-06-20 00:27:49',
            ),
            106 => 
            array (
                'id' => 107,
                'keyword' => 'scho',
                'count' => 1,
                'created_at' => '2023-09-14 00:06:47',
                'updated_at' => '2023-09-14 00:06:47',
            ),
            107 => 
            array (
                'id' => 108,
                'keyword' => 'canon-eos185',
                'count' => 1,
                'created_at' => '2023-09-14 09:09:05',
                'updated_at' => '2023-09-14 09:09:05',
            ),
            108 => 
            array (
                'id' => 109,
                'keyword' => 'Running Sneakers For Men',
                'count' => 1,
                'created_at' => '2023-09-14 17:07:06',
                'updated_at' => '2023-09-14 17:07:06',
            ),
            109 => 
            array (
                'id' => 110,
                'keyword' => 'Men Slim Mid Rise Jeans',
                'count' => 2,
                'created_at' => '2023-09-15 11:07:02',
                'updated_at' => '2023-09-15 11:19:33',
            ),
            110 => 
            array (
                'id' => 111,
                'keyword' => 'Rezmay Beauty Long Lasting Waterproof Non Transfer Liquid Matte Lipstick',
                'count' => 1,
                'created_at' => '2023-09-15 11:15:28',
                'updated_at' => '2023-09-15 11:15:28',
            ),
            111 => 
            array (
                'id' => 112,
            'keyword' => 'APPLE Macbook Air (2023) M2',
                'count' => 2,
                'created_at' => '2023-09-15 11:29:24',
                'updated_at' => '2023-09-15 11:29:24',
            ),
            112 => 
            array (
                'id' => 113,
                'keyword' => 'ARLTON LONDON Ava Fabric Sofa',
                'count' => 1,
                'created_at' => '2023-09-15 11:48:20',
                'updated_at' => '2023-09-15 11:48:20',
            ),
            113 => 
            array (
                'id' => 114,
                'keyword' => 'Bharat Lifestyle Lexus Fabric Sofa',
                'count' => 1,
                'created_at' => '2023-09-15 11:53:31',
                'updated_at' => '2023-09-15 11:53:31',
            ),
            114 => 
            array (
                'id' => 115,
                'keyword' => 'Women Typography Round Neck Pure Cotton White T-Shirt',
                'count' => 3,
                'created_at' => '2023-09-15 12:21:47',
                'updated_at' => '2023-09-15 12:21:58',
            ),
            115 => 
            array (
                'id' => 116,
                'keyword' => 'aby Boys Casual T-shirt Trouser',
                'count' => 1,
                'created_at' => '2023-09-16 01:58:11',
                'updated_at' => '2023-09-16 01:58:11',
            ),
            116 => 
            array (
                'id' => 117,
                'keyword' => 'Baby Boys Casual T-shirt Trouser',
                'count' => 3,
                'created_at' => '2023-09-16 01:58:18',
                'updated_at' => '2023-09-16 01:58:26',
            ),
            117 => 
            array (
                'id' => 118,
                'keyword' => 'wear',
                'count' => 1,
                'created_at' => '2023-09-16 02:17:43',
                'updated_at' => '2023-09-16 02:17:43',
            ),
            118 => 
            array (
                'id' => 119,
                'keyword' => 'Men Solid Polo Neck Pure Cotton White T-Shirt',
                'count' => 1,
                'created_at' => '2023-09-16 02:28:25',
                'updated_at' => '2023-09-16 02:28:25',
            ),
            119 => 
            array (
                'id' => 120,
                'keyword' => 'dcsd',
                'count' => 1,
                'created_at' => '2023-10-04 15:10:42',
                'updated_at' => '2023-10-04 15:10:42',
            ),
            120 => 
            array (
                'id' => 121,
                'keyword' => 'sc',
                'count' => 1,
                'created_at' => '2023-10-04 15:11:08',
                'updated_at' => '2023-10-04 15:11:08',
            ),
            121 => 
            array (
                'id' => 122,
                'keyword' => 'gg',
                'count' => 1,
                'created_at' => '2023-10-05 12:30:47',
                'updated_at' => '2023-10-05 12:30:47',
            ),
            122 => 
            array (
                'id' => 123,
                'keyword' => 'ss',
                'count' => 2,
                'created_at' => '2023-10-05 12:31:19',
                'updated_at' => '2023-10-05 11:47:07',
            ),
            123 => 
            array (
                'id' => 124,
                'keyword' => 'roy',
                'count' => 1,
                'created_at' => '2025-02-17 11:03:59',
                'updated_at' => '2025-02-17 11:03:59',
            ),
            124 => 
            array (
                'id' => 125,
                'keyword' => 'roya',
                'count' => 1,
                'created_at' => '2025-02-17 11:03:59',
                'updated_at' => '2025-02-17 11:03:59',
            ),
            125 => 
            array (
                'id' => 126,
                'keyword' => 'royal',
                'count' => 2,
                'created_at' => '2025-02-17 11:03:59',
                'updated_at' => '2025-02-17 11:24:07',
            ),
            126 => 
            array (
                'id' => 127,
                'keyword' => 'r',
                'count' => 1,
                'created_at' => '2025-02-17 11:04:30',
                'updated_at' => '2025-02-17 11:04:30',
            ),
            127 => 
            array (
                'id' => 128,
                'keyword' => 'rub',
                'count' => 1,
                'created_at' => '2025-02-17 11:04:31',
                'updated_at' => '2025-02-17 11:04:31',
            ),
            128 => 
            array (
                'id' => 129,
                'keyword' => 'ruby',
                'count' => 1,
                'created_at' => '2025-02-17 11:04:31',
                'updated_at' => '2025-02-17 11:04:31',
            ),
            129 => 
            array (
                'id' => 130,
                'keyword' => 'lap',
                'count' => 1,
                'created_at' => '2025-04-28 16:01:29',
                'updated_at' => '2025-04-28 16:01:29',
            ),
            130 => 
            array (
                'id' => 131,
                'keyword' => 'laptop',
                'count' => 1,
                'created_at' => '2025-04-28 16:01:30',
                'updated_at' => '2025-04-28 16:01:30',
            ),
            131 => 
            array (
                'id' => 132,
                'keyword' => 'kjkjkjk',
                'count' => 1,
                'created_at' => '2025-04-28 17:39:33',
                'updated_at' => '2025-04-28 17:39:33',
            ),
            132 => 
            array (
                'id' => 133,
                'keyword' => 'sofa',
                'count' => 1,
                'created_at' => '2025-04-28 17:39:40',
                'updated_at' => '2025-04-28 17:39:40',
            ),
        ));
        
        
    }
}