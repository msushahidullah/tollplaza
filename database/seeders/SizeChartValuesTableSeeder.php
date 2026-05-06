<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SizeChartValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('size_chart_values')->delete();
        
        \DB::table('size_chart_values')->insert(array (
            0 => 
            array (
                'id' => 5,
                'value' => 'Blue',
                'option_id' => 1,
                'created_at' => '2021-11-19 16:05:31',
                'updated_at' => '2021-11-19 16:05:31',
            ),
            1 => 
            array (
                'id' => 6,
                'value' => 'M',
                'option_id' => 2,
                'created_at' => '2021-11-19 16:05:31',
                'updated_at' => '2021-11-19 16:05:31',
            ),
            2 => 
            array (
                'id' => 16,
                'value' => 'S',
                'option_id' => 7,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            3 => 
            array (
                'id' => 17,
                'value' => 'M',
                'option_id' => 7,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            4 => 
            array (
                'id' => 18,
                'value' => 'L',
                'option_id' => 7,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            5 => 
            array (
                'id' => 19,
                'value' => 'Light Blue',
                'option_id' => 8,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            6 => 
            array (
                'id' => 20,
                'value' => 'Dark Black',
                'option_id' => 8,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            7 => 
            array (
                'id' => 21,
                'value' => 'Light Sky',
                'option_id' => 8,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            8 => 
            array (
                'id' => 22,
                'value' => '2399',
                'option_id' => 9,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            9 => 
            array (
                'id' => 23,
                'value' => '2399',
                'option_id' => 9,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
            10 => 
            array (
                'id' => 24,
                'value' => '2399',
                'option_id' => 9,
                'created_at' => '2023-09-15 11:21:28',
                'updated_at' => '2023-09-15 11:21:28',
            ),
        ));
        
        
    }
}