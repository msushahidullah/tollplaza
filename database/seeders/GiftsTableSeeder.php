<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GiftsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gifts')->delete();
        
        \DB::table('gifts')->insert(array (
            0 => 
            array (
                'id' => 3,
                'seller_id' => 17,
                'title' => 'test2',
                'gift_code' => 'test2',
                'end_date' => '2022-03-19',
                'apply_price' => '10',
                'count' => 4,
                'status' => 1,
                'created_at' => '2022-03-18 03:19:18',
                'updated_at' => '2022-03-18 03:28:12',
            ),
            1 => 
            array (
                'id' => 4,
                'seller_id' => 17,
                'title' => 'test3',
                'gift_code' => 'test3',
                'end_date' => '2022-03-18',
                'apply_price' => '34',
                'count' => 6,
                'status' => 1,
                'created_at' => '2022-03-18 03:31:36',
                'updated_at' => '2022-03-18 10:05:51',
            ),
            2 => 
            array (
                'id' => 6,
                'seller_id' => 17,
                'title' => 'holi',
                'gift_code' => 'holi',
                'end_date' => '2022-03-27',
                'apply_price' => '1',
                'count' => 4,
                'status' => 1,
                'created_at' => '2022-03-19 14:08:43',
                'updated_at' => '2022-03-19 14:08:43',
            ),
        ));
        
        
    }
}