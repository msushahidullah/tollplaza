<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlashsalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flashsales')->delete();
        
        \DB::table('flashsales')->insert(array (
            0 => 
            array (
                'id' => 8,
                'title' => 'Big billion days',
                'start_date' => '2023-04-06 22:37:00',
                'end_date' => '2023-10-05 05:18:00',
                'background_image' => 'flashdeal_6152a64a6e632.jpg',
                'detail' => '',
                'status' => 1,
                'created_at' => '2021-09-28 05:21:14',
                'updated_at' => '2023-09-15 13:52:20',
            ),
            1 => 
            array (
                'id' => 10,
                'title' => 'Great Indian Festival Sale',
                'start_date' => '2023-10-02 14:16:04',
                'end_date' => '2024-10-30 12:30:00',
                'background_image' => 'flashdeal_651a834c3dba5.png',
                'detail' => '',
                'status' => 1,
                'created_at' => '2021-09-28 06:08:44',
                'updated_at' => '2023-10-02 14:16:04',
            ),
            2 => 
            array (
                'id' => 11,
                'title' => 'Happy Diwali Sale',
                'start_date' => '2023-10-02 14:24:38',
                'end_date' => '2024-01-19 16:15:00',
                'background_image' => 'flashdeal_651a854e8532f.png',
                'detail' => '<p>Happy diwali grand mega sale !!</p>',
                'status' => 1,
                'created_at' => '2021-09-28 06:10:03',
                'updated_at' => '2023-10-02 14:24:38',
            ),
        ));
        
        
    }
}