<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TableMaintainenceModeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('table_maintainence_mode')->delete();
        
        \DB::table('table_maintainence_mode')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => '<h1 style="text-align:center;"><span style="color:#236fa1;"><strong>We will be back Soon !<br /><span style="font-size:14pt;color:#000000;">Sorry for Inconvience Site is currently in maintainence mode !</span></strong></span></h1>',
                'allowed_ips' => '["::1","127.0.0.1","10.0.0.01"]',
                'status' => 0,
                'created_at' => '2020-07-30 12:10:37',
                'updated_at' => '2020-11-25 15:42:07',
            ),
        ));
        
        
    }
}