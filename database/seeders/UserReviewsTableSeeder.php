<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_reviews')->delete();
        
        \DB::table('user_reviews')->insert(array (
            0 => 
            array (
                'id' => 2,
                'pro_id' => 39,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 1,
                'summary' => NULL,
                'review' => NULL,
                'qty' => 5,
                'price' => 5,
                'value' => 5,
                'status' => '1',
                'created_at' => '2020-02-06 18:28:40',
                'updated_at' => '2020-02-06 18:31:01',
            ),
            1 => 
            array (
                'id' => 3,
                'pro_id' => 14,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 1,
                'summary' => NULL,
                'review' => 'Good Watch ! value for money',
                'qty' => 3,
                'price' => 4,
                'value' => 4,
                'status' => '1',
                'created_at' => '2020-02-06 18:29:50',
                'updated_at' => '2020-02-06 18:31:02',
            ),
            2 => 
            array (
                'id' => 5,
                'pro_id' => 2,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 1,
                'summary' => NULL,
                'review' => 'Awesome camera for this range !! must buy',
                'qty' => 5,
                'price' => 5,
                'value' => 5,
                'status' => '1',
                'created_at' => '2020-02-18 12:24:55',
                'updated_at' => '2020-02-18 12:25:26',
            ),
            3 => 
            array (
                'id' => 14,
                'pro_id' => 7,
                'simple_pro_id' => NULL,
                'remark' => 'Spam Review',
                'user' => 1,
                'summary' => NULL,
                'review' => 'Awesome !',
                'qty' => 2,
                'price' => 3,
                'value' => 3,
                'status' => '0',
                'created_at' => '2020-06-18 18:23:35',
                'updated_at' => '2020-11-09 21:59:19',
            ),
            4 => 
            array (
                'id' => 16,
                'pro_id' => 1,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 1,
                'summary' => NULL,
                'review' => 'Good Product ....',
                'qty' => 4,
                'price' => 4,
                'value' => 4,
                'status' => '1',
                'created_at' => '2021-01-18 05:34:27',
                'updated_at' => '2021-01-18 05:35:18',
            ),
            5 => 
            array (
                'id' => 17,
                'pro_id' => 0,
                'simple_pro_id' => 1,
                'remark' => NULL,
                'user' => 1,
                'summary' => NULL,
                'review' => 'Hello',
                'qty' => 5,
                'price' => 5,
                'value' => 5,
                'status' => '1',
                'created_at' => '2021-06-13 19:05:16',
                'updated_at' => '2021-06-13 19:05:16',
            ),
            6 => 
            array (
                'id' => 18,
                'pro_id' => 39,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 28,
                'summary' => NULL,
                'review' => NULL,
                'qty' => 5,
                'price' => 5,
                'value' => 5,
                'status' => '1',
                'created_at' => '2020-02-06 18:28:40',
                'updated_at' => '2020-02-06 18:31:01',
            ),
            7 => 
            array (
                'id' => 19,
                'pro_id' => 39,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 6,
                'summary' => NULL,
                'review' => NULL,
                'qty' => 3,
                'price' => 2,
                'value' => 1,
                'status' => '1',
                'created_at' => '2020-02-06 18:28:40',
                'updated_at' => '2020-02-06 18:31:01',
            ),
            8 => 
            array (
                'id' => 20,
                'pro_id' => 39,
                'simple_pro_id' => NULL,
                'remark' => NULL,
                'user' => 27,
                'summary' => NULL,
                'review' => 'Good product',
                'qty' => 5,
                'price' => 4,
                'value' => 3,
                'status' => '1',
                'created_at' => '2020-02-06 18:28:40',
                'updated_at' => '2020-02-06 18:31:01',
            ),
        ));
        
        
    }
}