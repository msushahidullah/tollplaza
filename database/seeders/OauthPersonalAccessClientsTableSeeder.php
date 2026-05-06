<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthPersonalAccessClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_personal_access_clients')->delete();
        
        \DB::table('oauth_personal_access_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_id' => 1,
                'created_at' => '2020-07-10 15:30:35',
                'updated_at' => '2020-07-10 15:30:35',
            ),
            1 => 
            array (
                'id' => 2,
                'client_id' => 3,
                'created_at' => '2020-07-13 11:39:19',
                'updated_at' => '2020-07-13 11:39:19',
            ),
            2 => 
            array (
                'id' => 3,
                'client_id' => 5,
                'created_at' => '2020-07-13 11:39:32',
                'updated_at' => '2020-07-13 11:39:32',
            ),
            3 => 
            array (
                'id' => 4,
                'client_id' => 1,
                'created_at' => '2020-07-13 11:39:44',
                'updated_at' => '2020-07-13 11:39:44',
            ),
        ));
        
        
    }
}