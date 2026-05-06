<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserbanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('userbanks')->delete();
        
        \DB::table('userbanks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bankname' => 'HSJA',
                'acno' => '0067898765',
                'acname' => 'user01',
                'ifsc' => '789SXD89CZCEXZ',
                'user_id' => 23,
                'created_at' => '2020-07-06 15:39:08',
                'updated_at' => '2022-06-22 15:08:32',
            ),
            1 => 
            array (
                'id' => 2,
                'bankname' => 'DEMO BANK',
                'acno' => '98787646896887',
                'acname' => 'John',
                'ifsc' => 'DEMO1234',
                'user_id' => 1,
                'created_at' => '2020-04-27 12:23:42',
                'updated_at' => '2023-05-30 13:00:09',
            ),
            2 => 
            array (
                'id' => 3,
                'bankname' => 'DFSA',
                'acno' => '5678986545689',
                'acname' => 'user02',
                'ifsc' => 'SDFG345SDF2ASD',
                'user_id' => 24,
                'created_at' => '2020-07-08 13:33:09',
                'updated_at' => '2020-07-08 13:33:09',
            ),
            3 => 
            array (
                'id' => 4,
                'bankname' => 'HDFC Bank',
                'acno' => '86970978968575',
                'acname' => 'John',
                'ifsc' => 'HDFC123',
                'user_id' => 1,
                'created_at' => '2023-05-30 13:05:04',
                'updated_at' => '2023-05-30 13:05:04',
            ),
        ));
        
        
    }
}