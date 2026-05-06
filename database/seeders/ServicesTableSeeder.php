<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Course Title',
                'status' => 1,
                'created_at' => '2024-02-20 05:41:02',
                'updated_at' => '2024-02-20 05:45:34',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Course Short Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:42:54',
                'updated_at' => '2024-02-20 05:45:44',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Course Long Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:43:40',
                'updated_at' => '2024-02-20 05:43:47',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Blog Title',
                'status' => 1,
                'created_at' => '2024-02-20 05:44:07',
                'updated_at' => '2024-02-20 05:44:14',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Blog Short Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:44:36',
                'updated_at' => '2024-02-20 05:44:50',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Blog Long Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:45:09',
                'updated_at' => '2024-02-20 05:45:16',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Course SEO Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:46:13',
                'updated_at' => '2024-02-20 05:46:22',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Blog SEO Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:46:39',
                'updated_at' => '2024-02-20 05:46:47',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Upcoming Course Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:47:14',
                'updated_at' => '2024-02-20 05:47:22',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Quiz Questions',
                'status' => 1,
                'created_at' => '2024-02-20 05:47:58',
                'updated_at' => '2024-02-20 05:48:05',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'Generate FAQ',
                'status' => 1,
                'created_at' => '2024-02-20 05:55:04',
                'updated_at' => '2024-02-20 05:55:04',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Course  Requirements',
                'status' => 1,
                'created_at' => '2024-02-20 05:56:18',
                'updated_at' => '2024-02-20 05:56:18',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Form Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:56:41',
                'updated_at' => '2024-02-20 05:56:41',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'Form Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:56:42',
                'updated_at' => '2024-02-20 05:56:42',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'Course Advertising Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:57:38',
                'updated_at' => '2024-02-20 05:57:38',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => '"About Us " Page Description',
                'status' => 1,
                'created_at' => '2024-02-20 05:58:15',
                'updated_at' => '2024-02-20 05:58:15',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'Generate  Notice',
                'status' => 1,
                'created_at' => '2024-02-20 05:58:47',
                'updated_at' => '2024-02-20 05:58:47',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'Store Product Title',
                'status' => 1,
                'created_at' => '2024-02-20 05:59:58',
                'updated_at' => '2024-02-20 05:59:58',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'Store Product Description',
                'status' => 1,
                'created_at' => '2024-02-20 06:00:24',
                'updated_at' => '2024-02-20 06:00:41',
            ),
            19 => 
            array (
                'id' => 23,
                'name' => 'Store Product SEO Description',
                'status' => 1,
                'created_at' => '2024-02-20 06:01:15',
                'updated_at' => '2024-02-20 06:01:15',
            ),
            20 => 
            array (
                'id' => 24,
                'name' => 'Custom Text',
                'status' => 1,
                'created_at' => '2024-02-20 06:02:02',
                'updated_at' => '2024-02-20 06:02:02',
            ),
        ));
        
        
    }
}