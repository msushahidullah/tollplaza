<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:10:07',
                'updated_at' => '2020-01-23 18:10:07',
                'simple_pro_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:10:11',
                'updated_at' => '2020-01-23 18:10:11',
                'simple_pro_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:10:21',
                'updated_at' => '2020-01-23 18:10:21',
                'simple_pro_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:10:39',
                'updated_at' => '2020-01-23 18:10:39',
                'simple_pro_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:10:46',
                'updated_at' => '2020-01-23 18:10:46',
                'simple_pro_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:11:39',
                'updated_at' => '2020-01-23 18:11:39',
                'simple_pro_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:11:43',
                'updated_at' => '2020-01-23 18:11:43',
                'simple_pro_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Anoynyms',
                'email' => 'demo@test.com',
                'comment' => 'A perfect Laptop for Daily work',
                'approved' => 1,
                'pro_id' => 49,
                'created_at' => '2020-01-23 18:11:48',
                'updated_at' => '2020-01-23 18:11:48',
                'simple_pro_id' => NULL,
            ),
            8 => 
            array (
                'id' => 16,
                'name' => 'Hey',
                'email' => 'hey@test.com',
                'comment' => '<p>This is test comment by test user</p>',
                'approved' => 1,
                'pro_id' => 132,
                'created_at' => '2020-09-01 13:02:18',
                'updated_at' => '2020-09-01 13:02:18',
                'simple_pro_id' => NULL,
            ),
            9 => 
            array (
                'id' => 17,
                'name' => 'Ankit',
                'email' => 'test@test.com',
                'comment' => '<p>Awesome product !</p>',
                'approved' => 1,
                'pro_id' => 0,
                'created_at' => '2021-06-12 18:11:46',
                'updated_at' => '2021-06-12 18:11:46',
                'simple_pro_id' => 1,
            ),
            10 => 
            array (
                'id' => 18,
                'name' => 'John',
                'email' => 'john@test.com',
                'comment' => '<p>This is what i looking for... !</p>',
                'approved' => 1,
                'pro_id' => 0,
                'created_at' => '2021-06-12 18:17:48',
                'updated_at' => '2021-06-12 18:17:48',
                'simple_pro_id' => 1,
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'John doe',
                'email' => 'johndoe@gmail.com',
                'comment' => 'Waiting for reviews price is OK !',
                'approved' => 1,
                'pro_id' => 39,
                'created_at' => '2022-01-17 11:01:21',
                'updated_at' => '2022-01-17 11:01:21',
                'simple_pro_id' => 0,
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'Rammy',
                'email' => 'rammy@gmail.com',
                'comment' => 'Awesome release ',
                'approved' => 1,
                'pro_id' => 39,
                'created_at' => '2022-01-17 11:01:21',
                'updated_at' => '2022-01-17 11:01:21',
                'simple_pro_id' => 0,
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'Kalia Lloyd',
                'email' => 'kalia@gmail.com',
                'comment' => 'Good product !',
                'approved' => 1,
                'pro_id' => 39,
                'created_at' => '2022-01-17 11:01:21',
                'updated_at' => '2022-01-17 11:01:21',
                'simple_pro_id' => 0,
            ),
            14 => 
            array (
                'id' => 22,
                'name' => 'Sammy',
                'email' => 'sammy@gmail.com',
                'comment' => 'Best seller go for it !',
                'approved' => 1,
                'pro_id' => 19,
                'created_at' => '2022-01-17 11:01:21',
                'updated_at' => '2022-01-17 11:01:21',
                'simple_pro_id' => 0,
            ),
            15 => 
            array (
                'id' => 23,
                'name' => 'test',
                'email' => 'test1@test1.com',
                'comment' => '<p>Helllo</p>',
                'approved' => 1,
                'pro_id' => 19,
                'created_at' => '2022-04-24 16:47:25',
                'updated_at' => '2022-04-24 16:47:25',
                'simple_pro_id' => NULL,
            ),
        ));
        
        
    }
}