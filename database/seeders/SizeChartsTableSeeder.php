<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizeChartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('size_charts')->delete();
        
        \DB::table('size_charts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'template_name' => 'Shirt Size chart',
                'template_code' => 'TMP01',
                'status' => 1,
                'user_id' => 1,
                'created_at' => '2021-11-19 16:04:46',
                'updated_at' => '2021-11-19 16:05:31',
            ),
            1 => 
            array (
                'id' => 2,
                'template_name' => 'Pent Size Chart',
                'template_code' => 'PSC01',
                'status' => 1,
                'user_id' => 1,
                'created_at' => '2022-06-22 11:00:36',
                'updated_at' => '2022-06-22 11:00:36',
            ),
        ));
        
        
    }
}