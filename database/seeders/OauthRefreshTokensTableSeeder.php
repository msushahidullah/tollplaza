<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OauthRefreshTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_refresh_tokens')->delete();
        
        \DB::table('oauth_refresh_tokens')->insert(array (
            0 => 
            array (
                'id' => '05219d3e9ab302d105a6c85e5ffa5bc396bcc982976e81e08211d0281a2625e6c9cafc1e4e2d658e',
                'access_token_id' => '9568f1c3dbfd29fc11d7787678e09fd92d2286b3960f799abb30df50af509b1e0c214000e51426b7',
                'revoked' => 0,
                'expires_at' => '2023-03-03 09:38:44',
            ),
            1 => 
            array (
                'id' => '1c4bbfa54cf119607cdedeaebff7ce808663a32c0a77663077eac255db87783ca7a042b73e789bd9',
                'access_token_id' => 'dc3b22ae9b076cebf1a9a4c039a4862b02e2acd4ad76747a2e96306b342574857866071358c9127c',
                'revoked' => 0,
                'expires_at' => '2023-04-30 16:46:21',
            ),
            2 => 
            array (
                'id' => '3b488cfbdd4b20e9059219996dec6312639903644a7a046ad92a11365dcb0de5718de26c96c9abd5',
                'access_token_id' => '5f52608ef8c54aa99e2fb439aa077e28fd5acc0d3d14ec91a7407e4d03fab45f0164f9cd95801299',
                'revoked' => 0,
                'expires_at' => '2023-04-21 16:10:41',
            ),
            3 => 
            array (
                'id' => '46e148f1999ca65f34b820ca44cb3803a368e3d2cb9d656dff78f63ce917ac9268a6ad0a48f3d64a',
                'access_token_id' => 'ca12baaf9c0ab0c12b8f043acd97e22c6c0e880b4a9cbe0cdbf4608afde3181c7c87e4facfa924ec',
                'revoked' => 0,
                'expires_at' => '2023-01-10 17:41:32',
            ),
            4 => 
            array (
                'id' => '4a4cfd5a34fd219fb515be85fdf7c388dbf1cf1faca53442c0ab9c10dfa40724990345ba4576490b',
                'access_token_id' => 'bed28d9869eb06f23c2ba5d019a82af8fdd015f4e907cb26383c5fb0abd4704ef246cb6a6cc9dbd6',
                'revoked' => 0,
                'expires_at' => '2022-11-26 11:38:35',
            ),
            5 => 
            array (
                'id' => 'bb06d1372f2a3f76f13861323fe34cca4e4be19db016bb5ceac17bc6c500ef5769d3859c3d006996',
                'access_token_id' => 'becda834007311ebedb3ee12d114f4e5ab105f2c72d66acbc787e87364b7b9a781393ca62dd49b5f',
                'revoked' => 0,
                'expires_at' => '2023-04-22 12:58:00',
            ),
            6 => 
            array (
                'id' => 'c2b98a2578dfc518106d44238615af29453a9d04d0497e16dbe3556b6b382f7a80d866a412f25c17',
                'access_token_id' => '892255b079b05cb37c2962849e929a981c3e127415d46960ed6d122512b9b7439ad6914d5b548bcb',
                'revoked' => 0,
                'expires_at' => '2022-06-23 15:27:13',
            ),
            7 => 
            array (
                'id' => 'eae226aafe4a9aac62d7b9159c243efebca335529f76f1f2e8c7af9cca73d53b9a5c35b4c60948ad',
                'access_token_id' => '587a687ddcf982c60db283b28b1d58665d70d475bad4b57f93bf6092e4729feb7c1e5fb74977206e',
                'revoked' => 0,
                'expires_at' => '2023-01-10 14:07:19',
            ),
            8 => 
            array (
                'id' => 'ec0172892f3b8b55551120740c37554d480034ade2f18f27b380e7e3dafae734adc7d40b1dc00ef4',
                'access_token_id' => 'd8ebf38ae0f8168946a83f07b87a29cec68d27ac2fa9daeeb06037e2a8be00c35fe48967db04cba2',
                'revoked' => 0,
                'expires_at' => '2023-03-04 10:01:06',
            ),
        ));
        
        
    }
}