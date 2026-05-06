<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizeChartOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('size_chart_options')->delete();
        
        \DB::table('size_chart_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'option' => 'Color',
                'size_id' => 1,
                'created_at' => '2021-11-19 16:04:46',
                'updated_at' => '2021-11-19 16:04:46',
            ),
            1 => 
            array (
                'id' => 2,
                'option' => 'Size',
                'size_id' => 1,
                'created_at' => '2021-11-19 16:04:46',
                'updated_at' => '2021-11-19 16:04:46',
            ),
            2 => 
            array (
                'id' => 6,
                'option' => 'Price',
                'size_id' => 1,
                'created_at' => '2021-11-22 11:56:25',
                'updated_at' => '2021-11-22 11:56:25',
            ),
            3 => 
            array (
                'id' => 7,
                'option' => 'Size',
                'size_id' => 2,
                'created_at' => '2022-06-22 11:00:36',
                'updated_at' => '2022-06-22 11:00:36',
            ),
            4 => 
            array (
                'id' => 8,
                'option' => 'Color',
                'size_id' => 2,
                'created_at' => '2022-06-22 11:00:36',
                'updated_at' => '2022-06-22 11:00:36',
            ),
            5 => 
            array (
                'id' => 9,
                'option' => 'Price',
                'size_id' => 2,
                'created_at' => '2022-06-22 11:00:36',
                'updated_at' => '2022-06-22 11:00:36',
            ),
        ));
        
        
    }
}