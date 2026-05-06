<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApiKeysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('api_keys')->delete();
        
        \DB::table('api_keys')->insert(array (
            0 => 
            array (
                'id' => 1,
                'secret_key' => '2908df2c-881e-49fc-933c-92d6ea90d182',
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}