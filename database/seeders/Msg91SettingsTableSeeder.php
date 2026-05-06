<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Msg91SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('msg91_settings')->delete();
        
        \DB::table('msg91_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'orders',
                'message' => NULL,
                'otp_length' => NULL,
                'otp_expiry' => NULL,
                'sender_id' => 'SMSIND',
                'flow_id' => '5f215064d6fc0543e6225d74',
                'unicode' => '1',
            ),
        ));
        
        
    }
}