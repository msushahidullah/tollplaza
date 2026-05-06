<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'emart Personal Access Client',
                'secret' => 'qzGjMy7vmcwMOCmOUm5KClRaIVke5yJb5R7t1k7T',
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2020-07-13 11:39:44',
                'updated_at' => '2020-07-13 11:39:44',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'emart Password Grant Client',
                'secret' => 'kXawyHKv6vC95PH62LqZSLXL1iGT9CPfvfer46Bx',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2020-07-13 11:39:44',
                'updated_at' => '2020-07-13 11:39:44',
            ),
        ));
        
        
    }
}