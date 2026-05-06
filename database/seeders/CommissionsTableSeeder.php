<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commissions')->delete();
        
        \DB::table('commissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 3,
                'rate' => '0',
                'type' => 'p',
                'status' => '1',
                'created_at' => '2020-01-15 17:44:42',
                'updated_at' => '2020-10-10 17:01:07',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'rate' => '2',
                'type' => 'p',
                'status' => '1',
                'created_at' => '2020-01-15 17:44:59',
                'updated_at' => '2020-01-20 18:13:24',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 4,
                'rate' => '850',
                'type' => 'f',
                'status' => '1',
                'created_at' => '2020-01-15 17:45:13',
                'updated_at' => '2020-01-15 17:45:13',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 2,
                'rate' => '0',
                'type' => 'p',
                'status' => '1',
                'created_at' => '2020-01-15 17:45:53',
                'updated_at' => '2020-10-10 17:01:26',
            ),
        ));
        
        
    }
}