<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => NULL,
                'language' => 'en',
                'created_at' => '2021-07-16 10:58:35',
                'updated_at' => '2021-07-16 10:58:35',
            ),
        ));
        
        
    }
}