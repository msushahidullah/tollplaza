<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogcommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogcomments')->delete();
        
        \DB::table('blogcomments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'post_id' => 1,
                'name' => 'Hello',
                'email' => 'hello@gmail.com',
                'comment' => '<p>this is test comment</p>',
                'status' => 1,
                'created_at' => '2020-02-21 21:58:51',
                'updated_at' => '2020-02-21 21:58:51',
            ),
            1 => 
            array (
                'id' => 2,
                'post_id' => 3,
                'name' => 'Mohit Rathore',
                'email' => 'admin@gmail.com',
                'comment' => '<p>Test</p>',
                'status' => 1,
                'created_at' => '2023-04-01 13:03:47',
                'updated_at' => '2023-04-01 13:03:47',
            ),
            2 => 
            array (
                'id' => 4,
                'post_id' => 3,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'comment' => '<p>Great</p>',
                'status' => 1,
                'created_at' => '2023-04-01 13:37:39',
                'updated_at' => '2023-04-01 13:37:39',
            ),
            3 => 
            array (
                'id' => 5,
                'post_id' => 1,
                'name' => 'Arjun',
                'email' => 'admin@mediacity.co.in',
                'comment' => '<p>fesdxws</p>',
                'status' => 1,
                'created_at' => '2023-10-04 15:09:10',
                'updated_at' => '2023-10-04 15:09:10',
            ),
            4 => 
            array (
                'id' => 6,
                'post_id' => 1,
                'name' => 'user',
                'email' => 'user@gmail.cm',
                'comment' => '<p>test</p>',
                'status' => 1,
                'created_at' => '2025-04-28 16:35:40',
                'updated_at' => '2025-04-28 16:35:40',
            ),
        ));
        
        
    }
}