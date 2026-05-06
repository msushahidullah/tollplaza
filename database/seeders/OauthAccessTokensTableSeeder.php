<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '07f7a398ba050b7724f82d90de275d9357777f15ed50968d057afa84e0e13b4701051ee20a3f0542',
                'user_id' => 62,
                'client_id' => 1,
                'name' => 'emart Password Grant Client',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-06-23 15:50:08',
                'updated_at' => '2021-06-23 15:50:08',
                'expires_at' => '2022-06-23 15:50:08',
            ),
            1 => 
            array (
                'id' => '2b6f739a81c2b9c321f732294804488fbd812aaa921e18b70d7df10f4580dfd945da64f37d6cc612',
                'user_id' => 62,
                'client_id' => 1,
                'name' => 'emart Password Grant Client',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-06-22 18:19:10',
                'updated_at' => '2021-06-22 18:19:10',
                'expires_at' => '2022-06-22 18:19:10',
            ),
            2 => 
            array (
                'id' => '31805426fcaa7c8a11a9b1c53c78c39baead8339a78127fddfc1f4f3652f013b12c7a95ff17c6261',
                'user_id' => 62,
                'client_id' => 1,
                'name' => 'emart Password Grant Client',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-06-22 18:18:40',
                'updated_at' => '2021-06-22 18:18:40',
                'expires_at' => '2022-06-22 18:18:40',
            ),
            3 => 
            array (
                'id' => '587a687ddcf982c60db283b28b1d58665d70d475bad4b57f93bf6092e4729feb7c1e5fb74977206e',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-10 14:07:19',
                'updated_at' => '2022-01-10 14:07:19',
                'expires_at' => '2023-01-10 14:07:19',
            ),
            4 => 
            array (
                'id' => '5f52608ef8c54aa99e2fb439aa077e28fd5acc0d3d14ec91a7407e4d03fab45f0164f9cd95801299',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-04-21 16:10:41',
                'updated_at' => '2022-04-21 16:10:41',
                'expires_at' => '2023-04-21 16:10:41',
            ),
            5 => 
            array (
                'id' => '62c31104d8caf94a84bda53a4e2daff042dc708c00f16282a66a3d817e0a9b82ce58e97edbaae153',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'emart Password Grant Client',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-04-24 15:50:24',
                'updated_at' => '2022-04-24 15:50:24',
                'expires_at' => '2023-04-24 15:50:24',
            ),
            6 => 
            array (
                'id' => '892255b079b05cb37c2962849e929a981c3e127415d46960ed6d122512b9b7439ad6914d5b548bcb',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-06-23 15:27:13',
                'updated_at' => '2021-06-23 15:27:13',
                'expires_at' => '2022-06-23 15:27:13',
            ),
            7 => 
            array (
                'id' => '9568f1c3dbfd29fc11d7787678e09fd92d2286b3960f799abb30df50af509b1e0c214000e51426b7',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-03-03 09:38:44',
                'updated_at' => '2022-03-03 09:38:44',
                'expires_at' => '2023-03-03 09:38:44',
            ),
            8 => 
            array (
                'id' => 'becda834007311ebedb3ee12d114f4e5ab105f2c72d66acbc787e87364b7b9a781393ca62dd49b5f',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-04-22 12:58:00',
                'updated_at' => '2022-04-22 12:58:00',
                'expires_at' => '2023-04-22 12:58:00',
            ),
            9 => 
            array (
                'id' => 'bed28d9869eb06f23c2ba5d019a82af8fdd015f4e907cb26383c5fb0abd4704ef246cb6a6cc9dbd6',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2021-11-26 11:38:35',
                'updated_at' => '2021-11-26 11:38:35',
                'expires_at' => '2022-11-26 11:38:35',
            ),
            10 => 
            array (
                'id' => 'ca12baaf9c0ab0c12b8f043acd97e22c6c0e880b4a9cbe0cdbf4608afde3181c7c87e4facfa924ec',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-01-10 17:41:32',
                'updated_at' => '2022-01-10 17:41:32',
                'expires_at' => '2023-01-10 17:41:32',
            ),
            11 => 
            array (
                'id' => 'd8ebf38ae0f8168946a83f07b87a29cec68d27ac2fa9daeeb06037e2a8be00c35fe48967db04cba2',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-03-04 10:01:06',
                'updated_at' => '2022-03-04 10:01:06',
                'expires_at' => '2023-03-04 10:01:06',
            ),
            12 => 
            array (
                'id' => 'dc3b22ae9b076cebf1a9a4c039a4862b02e2acd4ad76747a2e96306b342574857866071358c9127c',
                'user_id' => 1,
                'client_id' => 2,
                'name' => NULL,
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2022-04-30 16:46:21',
                'updated_at' => '2022-04-30 16:46:21',
                'expires_at' => '2023-04-30 16:46:21',
            ),
        ));
        
        
    }
}