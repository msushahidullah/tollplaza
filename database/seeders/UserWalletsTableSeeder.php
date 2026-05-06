<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserWalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_wallets')->delete();
        
        \DB::table('user_wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'balance' => 0.0,
                'status' => 1,
                'created_at' => '2020-08-08 21:47:50',
                'updated_at' => '2022-05-19 12:17:51',
            ),
        ));
        
        
    }
}