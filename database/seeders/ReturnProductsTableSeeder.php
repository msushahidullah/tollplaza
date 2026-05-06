<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReturnProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('return__products')->delete();
        
        
        
    }
}