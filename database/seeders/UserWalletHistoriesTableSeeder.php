<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserWalletHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_wallet_histories')->delete();
        
        
        
    }
}