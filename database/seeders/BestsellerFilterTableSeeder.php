<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BestsellerFilterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bestseller_filter')->delete();
        
        \DB::table('bestseller_filter')->insert(array (
            0 => 
            array (
                'id' => 1,
                'filter_by' => 'monthly',
                'created_at' => '2022-06-22 00:29:24',
                'updated_at' => '2022-06-22 00:30:30',
            ),
        ));
        
        
    }
}