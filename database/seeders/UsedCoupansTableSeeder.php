<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsedCoupansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('used_coupans')->delete();
        
        
        
    }
}