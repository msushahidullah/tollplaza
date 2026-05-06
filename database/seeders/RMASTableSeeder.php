<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RMASTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('r_m_a_s')->delete();
        
        \DB::table('r_m_a_s')->insert(array (
            0 => 
            array (
                'id' => 2,
                'reason' => 'The product is not good',
                'status' => 1,
                'created_at' => '2021-11-09 06:23:40',
                'updated_at' => '2021-11-09 06:23:40',
            ),
            1 => 
            array (
                'id' => 3,
                'reason' => 'Product is not up to my expectations',
                'status' => 1,
                'created_at' => '2021-11-09 06:26:32',
                'updated_at' => '2021-11-09 06:39:26',
            ),
        ));
        
        
    }
}