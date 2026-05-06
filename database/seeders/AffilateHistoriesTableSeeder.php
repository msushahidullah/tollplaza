<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AffilateHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('affilate_histories')->delete();
        
        \DB::table('affilate_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'refer_user_id' => 57,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2021-05-10 15:56:02',
                'updated_at' => '2021-05-10 15:56:02',
            ),
            1 => 
            array (
                'id' => 2,
                'refer_user_id' => 59,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2021-05-10 21:29:33',
                'updated_at' => '2021-05-10 22:13:43',
            ),
            2 => 
            array (
                'id' => 3,
                'refer_user_id' => 60,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2021-05-10 22:17:42',
                'updated_at' => '2021-05-10 22:21:33',
            ),
            3 => 
            array (
                'id' => 4,
                'refer_user_id' => 63,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2021-07-09 14:46:41',
                'updated_at' => '2021-07-09 14:46:41',
            ),
            4 => 
            array (
                'id' => 5,
                'refer_user_id' => 64,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2021-08-26 14:30:11',
                'updated_at' => '2021-08-26 14:30:11',
            ),
            5 => 
            array (
                'id' => 6,
                'refer_user_id' => 68,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 12:29:28',
                'updated_at' => '2022-05-19 12:29:28',
            ),
            6 => 
            array (
                'id' => 7,
                'refer_user_id' => 69,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 12:56:35',
                'updated_at' => '2022-05-19 12:56:35',
            ),
            7 => 
            array (
                'id' => 8,
                'refer_user_id' => 70,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 15:18:39',
                'updated_at' => '2022-05-19 15:18:39',
            ),
            8 => 
            array (
                'id' => 9,
                'refer_user_id' => 71,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 15:22:44',
                'updated_at' => '2022-05-19 15:22:44',
            ),
            9 => 
            array (
                'id' => 10,
                'refer_user_id' => 72,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 15:29:45',
                'updated_at' => '2022-05-19 15:29:45',
            ),
            10 => 
            array (
                'id' => 11,
                'refer_user_id' => 73,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-19 15:31:45',
                'updated_at' => '2022-05-19 15:31:45',
            ),
            11 => 
            array (
                'id' => 12,
                'refer_user_id' => 77,
                'log' => 'Refer successfull',
                'user_id' => 6,
                'amount' => 0.06,
                'procces' => 1,
                'created_at' => '2022-05-20 15:20:45',
                'updated_at' => '2022-05-20 15:20:45',
            ),
            12 => 
            array (
                'id' => 13,
                'refer_user_id' => 78,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 0,
                'created_at' => '2022-11-25 00:05:20',
                'updated_at' => '2022-11-25 00:05:20',
            ),
            13 => 
            array (
                'id' => 14,
                'refer_user_id' => 79,
                'log' => 'Refer successfull',
                'user_id' => 1,
                'amount' => 0.06,
                'procces' => 0,
                'created_at' => '2022-11-29 16:03:07',
                'updated_at' => '2022-11-29 16:03:07',
            ),
        ));
        
        
    }
}