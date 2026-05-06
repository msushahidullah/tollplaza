<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('views')->delete();
        
        \DB::table('views')->insert(array (
            0 => 
            array (
                'id' => 2,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:42:16',
            ),
            1 => 
            array (
                'id' => 3,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:42:28',
            ),
            2 => 
            array (
                'id' => 4,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 12,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:45:35',
            ),
            3 => 
            array (
                'id' => 5,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 14,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:53:19',
            ),
            4 => 
            array (
                'id' => 6,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 2,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:55:15',
            ),
            5 => 
            array (
                'id' => 7,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 2,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:55:47',
            ),
            6 => 
            array (
                'id' => 8,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 2,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 11:55:59',
            ),
            7 => 
            array (
                'id' => 9,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 32,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 12:19:44',
            ),
            8 => 
            array (
                'id' => 10,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 32,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 12:25:57',
            ),
            9 => 
            array (
                'id' => 11,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 12,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 13:03:40',
            ),
            10 => 
            array (
                'id' => 12,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 15,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 13:54:40',
            ),
            11 => 
            array (
                'id' => 13,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 15,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 13:56:02',
            ),
            12 => 
            array (
                'id' => 14,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 13:56:24',
            ),
            13 => 
            array (
                'id' => 15,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:08:43',
            ),
            14 => 
            array (
                'id' => 16,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:14:48',
            ),
            15 => 
            array (
                'id' => 17,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 32,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:16:06',
            ),
            16 => 
            array (
                'id' => 18,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:16:29',
            ),
            17 => 
            array (
                'id' => 19,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:16:53',
            ),
            18 => 
            array (
                'id' => 20,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:36:50',
            ),
            19 => 
            array (
                'id' => 21,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 13,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:43:59',
            ),
            20 => 
            array (
                'id' => 22,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 11,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:44:11',
            ),
            21 => 
            array (
                'id' => 23,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 2,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 14:44:33',
            ),
            22 => 
            array (
                'id' => 24,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:04:30',
            ),
            23 => 
            array (
                'id' => 25,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:05:11',
            ),
            24 => 
            array (
                'id' => 26,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:08:51',
            ),
            25 => 
            array (
                'id' => 27,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:09:11',
            ),
            26 => 
            array (
                'id' => 28,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:09:20',
            ),
            27 => 
            array (
                'id' => 29,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:09:48',
            ),
            28 => 
            array (
                'id' => 30,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:10:48',
            ),
            29 => 
            array (
                'id' => 31,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:11:01',
            ),
            30 => 
            array (
                'id' => 32,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 2,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 15:15:21',
            ),
            31 => 
            array (
                'id' => 33,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 16:58:46',
            ),
            32 => 
            array (
                'id' => 34,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 5,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 16:59:04',
            ),
            33 => 
            array (
                'id' => 35,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 16:59:44',
            ),
            34 => 
            array (
                'id' => 36,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 16:59:51',
            ),
            35 => 
            array (
                'id' => 37,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:05:09',
            ),
            36 => 
            array (
                'id' => 38,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:05:27',
            ),
            37 => 
            array (
                'id' => 39,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:17:54',
            ),
            38 => 
            array (
                'id' => 40,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:26:28',
            ),
            39 => 
            array (
                'id' => 41,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:26:32',
            ),
            40 => 
            array (
                'id' => 42,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 5,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:27:51',
            ),
            41 => 
            array (
                'id' => 43,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 15,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:28:09',
            ),
            42 => 
            array (
                'id' => 44,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 15,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:33:09',
            ),
            43 => 
            array (
                'id' => 45,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 16,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:38:07',
            ),
            44 => 
            array (
                'id' => 46,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 16,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 17:50:17',
            ),
            45 => 
            array (
                'id' => 47,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 32,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 18:01:41',
            ),
            46 => 
            array (
                'id' => 48,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 18:01:49',
            ),
            47 => 
            array (
                'id' => 49,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 28,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-04 18:08:24',
            ),
            48 => 
            array (
                'id' => 50,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:59:17',
            ),
            49 => 
            array (
                'id' => 51,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:59:56',
            ),
            50 => 
            array (
                'id' => 52,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:00:08',
            ),
            51 => 
            array (
                'id' => 53,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:00:19',
            ),
            52 => 
            array (
                'id' => 54,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 28,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:02:20',
            ),
            53 => 
            array (
                'id' => 55,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 28,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:02:21',
            ),
            54 => 
            array (
                'id' => 58,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 16,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:06:56',
            ),
            55 => 
            array (
                'id' => 59,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 30,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:21:00',
            ),
            56 => 
            array (
                'id' => 61,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:36:44',
            ),
            57 => 
            array (
                'id' => 62,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:42:45',
            ),
            58 => 
            array (
                'id' => 63,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 34,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:47:42',
            ),
            59 => 
            array (
                'id' => 64,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 35,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:59:46',
            ),
            60 => 
            array (
                'id' => 65,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 36,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:09:39',
            ),
            61 => 
            array (
                'id' => 66,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 37,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:30:04',
            ),
            62 => 
            array (
                'id' => 67,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:38:50',
            ),
            63 => 
            array (
                'id' => 68,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:47:21',
            ),
            64 => 
            array (
                'id' => 69,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:49:26',
            ),
            65 => 
            array (
                'id' => 70,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:49:35',
            ),
            66 => 
            array (
                'id' => 71,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 11,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:56:38',
            ),
            67 => 
            array (
                'id' => 72,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:58:44',
            ),
            68 => 
            array (
                'id' => 73,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 11,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:59:23',
            ),
            69 => 
            array (
                'id' => 74,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:05:09',
            ),
            70 => 
            array (
                'id' => 75,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 32,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:06:30',
            ),
            71 => 
            array (
                'id' => 76,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:06:48',
            ),
            72 => 
            array (
                'id' => 77,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 11,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:19:25',
            ),
            73 => 
            array (
                'id' => 78,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:22:15',
            ),
            74 => 
            array (
                'id' => 79,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 31,
                'visitor' => 'XBUwojGL4fqfpI4t3bOXJX73CCJRsCZywv0yPjm0v0tYoAbR5nPqFppIHnPttUC9pHCrGF3uYAycThgM',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 12:22:55',
            ),
            75 => 
            array (
                'id' => 80,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'kKM0m5uQmZRLsWctCex51ruL1s2CBy0y3Wo0GZlr0D527mPwzVRSNo77kA9OIOfcc0OWC9lyVQcO0Npm',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:10:06',
            ),
            76 => 
            array (
                'id' => 81,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:12:34',
            ),
            77 => 
            array (
                'id' => 82,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'kKM0m5uQmZRLsWctCex51ruL1s2CBy0y3Wo0GZlr0D527mPwzVRSNo77kA9OIOfcc0OWC9lyVQcO0Npm',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:13:09',
            ),
            78 => 
            array (
                'id' => 83,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'kKM0m5uQmZRLsWctCex51ruL1s2CBy0y3Wo0GZlr0D527mPwzVRSNo77kA9OIOfcc0OWC9lyVQcO0Npm',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:15:58',
            ),
            79 => 
            array (
                'id' => 84,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:19:16',
            ),
            80 => 
            array (
                'id' => 85,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:20:05',
            ),
            81 => 
            array (
                'id' => 86,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:20:20',
            ),
            82 => 
            array (
                'id' => 87,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:20:29',
            ),
            83 => 
            array (
                'id' => 88,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 09:30:10',
            ),
            84 => 
            array (
                'id' => 89,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 27,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:11:15',
            ),
            85 => 
            array (
                'id' => 90,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 27,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:12:13',
            ),
            86 => 
            array (
                'id' => 91,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 1,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:17:41',
            ),
            87 => 
            array (
                'id' => 92,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:23:56',
            ),
            88 => 
            array (
                'id' => 93,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 8,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:24:08',
            ),
            89 => 
            array (
                'id' => 94,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:25:57',
            ),
            90 => 
            array (
                'id' => 95,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:26:38',
            ),
            91 => 
            array (
                'id' => 96,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:28:06',
            ),
            92 => 
            array (
                'id' => 97,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:28:19',
            ),
            93 => 
            array (
                'id' => 98,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:34:23',
            ),
            94 => 
            array (
                'id' => 99,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:38:16',
            ),
            95 => 
            array (
                'id' => 100,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:40:52',
            ),
            96 => 
            array (
                'id' => 101,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:43:29',
            ),
            97 => 
            array (
                'id' => 102,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:43:37',
            ),
            98 => 
            array (
                'id' => 103,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:43:54',
            ),
            99 => 
            array (
                'id' => 104,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:43:54',
            ),
            100 => 
            array (
                'id' => 105,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 30,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:44:03',
            ),
            101 => 
            array (
                'id' => 106,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:44:20',
            ),
            102 => 
            array (
                'id' => 107,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:46:18',
            ),
            103 => 
            array (
                'id' => 108,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:46:27',
            ),
            104 => 
            array (
                'id' => 109,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:46:32',
            ),
            105 => 
            array (
                'id' => 110,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:46:49',
            ),
            106 => 
            array (
                'id' => 111,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:47:30',
            ),
            107 => 
            array (
                'id' => 112,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 10:49:43',
            ),
            108 => 
            array (
                'id' => 113,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:00:19',
            ),
            109 => 
            array (
                'id' => 114,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:00:35',
            ),
            110 => 
            array (
                'id' => 115,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:01:37',
            ),
            111 => 
            array (
                'id' => 116,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:02:15',
            ),
            112 => 
            array (
                'id' => 117,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:04:09',
            ),
            113 => 
            array (
                'id' => 118,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 36,
                'visitor' => 'QmPXFJYlokmYCbx4DWHOAlYopVuik6Dk8lPo8BIE1ncRuXYYKgFZNLwmVVfdxMDFlYwlEgsIxUth7XXx',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:07:09',
            ),
            114 => 
            array (
                'id' => 119,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 12,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:09:24',
            ),
            115 => 
            array (
                'id' => 120,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 14,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:09:34',
            ),
            116 => 
            array (
                'id' => 121,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:40:51',
            ),
            117 => 
            array (
                'id' => 122,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:41:19',
            ),
            118 => 
            array (
                'id' => 123,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:42:11',
            ),
            119 => 
            array (
                'id' => 124,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:43:01',
            ),
            120 => 
            array (
                'id' => 125,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:44:59',
            ),
            121 => 
            array (
                'id' => 126,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:45:18',
            ),
            122 => 
            array (
                'id' => 127,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:45:37',
            ),
            123 => 
            array (
                'id' => 128,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:45:48',
            ),
            124 => 
            array (
                'id' => 129,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 4,
                'visitor' => 'H3quf39dQBPAVPlB92aWGGl1xCxvjlOT2o50hFi1Avq10RRwqnDhMLPrG4wle9XbEF6b81CFToL5PL0g',
                'collection' => NULL,
                'viewed_at' => '2023-10-05 11:46:06',
            ),
            125 => 
            array (
                'id' => 130,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 37,
                'visitor' => 'ZIb0xiIrph69LpckJIk6855WUyzRpHKCvgQewE4c0wy0LOe8VhtrMnmwtDUfzxmE8mr3isaqGjwltpFG',
                'collection' => NULL,
                'viewed_at' => '2025-02-17 11:04:39',
            ),
            126 => 
            array (
                'id' => 131,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 37,
                'visitor' => 'ZIb0xiIrph69LpckJIk6855WUyzRpHKCvgQewE4c0wy0LOe8VhtrMnmwtDUfzxmE8mr3isaqGjwltpFG',
                'collection' => NULL,
                'viewed_at' => '2025-02-17 11:24:13',
            ),
            127 => 
            array (
                'id' => 132,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 31,
                'visitor' => 'ZIb0xiIrph69LpckJIk6855WUyzRpHKCvgQewE4c0wy0LOe8VhtrMnmwtDUfzxmE8mr3isaqGjwltpFG',
                'collection' => NULL,
                'viewed_at' => '2025-02-17 11:37:45',
            ),
            128 => 
            array (
                'id' => 133,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 34,
                'visitor' => 'ZIb0xiIrph69LpckJIk6855WUyzRpHKCvgQewE4c0wy0LOe8VhtrMnmwtDUfzxmE8mr3isaqGjwltpFG',
                'collection' => NULL,
                'viewed_at' => '2025-02-17 11:38:32',
            ),
            129 => 
            array (
                'id' => 134,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 3,
                'visitor' => '63EUxRYDFne1eVd6AlcZ8iinnrvwA3Y0tOlNWSdoTvrN8UOnf6POu0bZwcEvDYKjwqvAkZe4TERu6Bpu',
                'collection' => NULL,
                'viewed_at' => '2025-02-19 14:59:51',
            ),
            130 => 
            array (
                'id' => 135,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 9,
                'visitor' => '63EUxRYDFne1eVd6AlcZ8iinnrvwA3Y0tOlNWSdoTvrN8UOnf6POu0bZwcEvDYKjwqvAkZe4TERu6Bpu',
                'collection' => NULL,
                'viewed_at' => '2025-02-19 17:59:21',
            ),
            131 => 
            array (
                'id' => 136,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 5,
                'visitor' => '63EUxRYDFne1eVd6AlcZ8iinnrvwA3Y0tOlNWSdoTvrN8UOnf6POu0bZwcEvDYKjwqvAkZe4TERu6Bpu',
                'collection' => NULL,
                'viewed_at' => '2025-02-19 18:08:38',
            ),
            132 => 
            array (
                'id' => 137,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 5,
                'visitor' => '63EUxRYDFne1eVd6AlcZ8iinnrvwA3Y0tOlNWSdoTvrN8UOnf6POu0bZwcEvDYKjwqvAkZe4TERu6Bpu',
                'collection' => NULL,
                'viewed_at' => '2025-02-19 18:09:53',
            ),
            133 => 
            array (
                'id' => 138,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 6,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:29:14',
            ),
            134 => 
            array (
                'id' => 139,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 31,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:33:07',
            ),
            135 => 
            array (
                'id' => 140,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 31,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:33:58',
            ),
            136 => 
            array (
                'id' => 141,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 1,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:35:01',
            ),
            137 => 
            array (
                'id' => 142,
                'viewable_type' => 'App\\Blog',
                'viewable_id' => 1,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:35:42',
            ),
            138 => 
            array (
                'id' => 143,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 21,
                'visitor' => 'ZeFiwDORvl4kfs7L42F9WC72gAAxUmZcoH0chr8q0n7AwYtcoISdqpGCEptBPPcURfiIgInBnm1A5lve',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 16:36:22',
            ),
            139 => 
            array (
                'id' => 144,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:21:56',
            ),
            140 => 
            array (
                'id' => 145,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:04',
            ),
            141 => 
            array (
                'id' => 146,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:13',
            ),
            142 => 
            array (
                'id' => 147,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:35',
            ),
            143 => 
            array (
                'id' => 148,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:38',
            ),
            144 => 
            array (
                'id' => 149,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:42',
            ),
            145 => 
            array (
                'id' => 150,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:52',
            ),
            146 => 
            array (
                'id' => 151,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 54,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:22:56',
            ),
            147 => 
            array (
                'id' => 152,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 55,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:23:18',
            ),
            148 => 
            array (
                'id' => 153,
                'viewable_type' => 'App\\SimpleProduct',
                'viewable_id' => 14,
                'visitor' => 'ii6oHxEmMLJo95Xd2KU8KYDnoK5iifxb64gtbgc8f1sVX4Sm1E6TwcH92Ye7e35LXRhoRcDA2br1SlIP',
                'collection' => NULL,
                'viewed_at' => '2025-04-28 17:24:58',
            ),
            149 => 
            array (
                'id' => 154,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 28,
                'visitor' => 'BGooMpX8mCRfgVrPFCmE7HEI1wWxuPd8stb1aa0To2OfcZBshrnor0AvVi17fBjDhjFQtednx2TMd7nR',
                'collection' => NULL,
                'viewed_at' => '2025-09-22 09:44:18',
            ),
            150 => 
            array (
                'id' => 155,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 4,
                'visitor' => '6jigNOLgCC6saXLIDnUx3f3c3UkL8mxriiQukpUYjxtOHg12hXfq9n8A6yIcRGVZV3sXi5AM20H5ncBS',
                'collection' => NULL,
                'viewed_at' => '2025-09-22 09:58:14',
            ),
            151 => 
            array (
                'id' => 156,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 27,
                'visitor' => 'aQAvFrZKYTzVisb5z26AcJdWBQxmgE8qYrYnN4CBnpUW2S5yNfyVyYxLMm8E7WSt15ed1Ov6g1Xm1Qa0',
                'collection' => NULL,
                'viewed_at' => '2025-09-22 11:16:06',
            ),
            152 => 
            array (
                'id' => 157,
                'viewable_type' => 'App\\Product',
                'viewable_id' => 27,
                'visitor' => 'aQAvFrZKYTzVisb5z26AcJdWBQxmgE8qYrYnN4CBnpUW2S5yNfyVyYxLMm8E7WSt15ed1Ov6g1Xm1Qa0',
                'collection' => NULL,
                'viewed_at' => '2025-09-22 11:18:07',
            ),
        ));
        
        
    }
}