<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner_settings')->delete();
        
        \DB::table('banner_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Emart banner',
                'url' => 'http://127.0.0.1:8000/',
                'image' => 'Artboard–1.png',
                'content' => 'Best Deals For New Users : Save more with coupons + 10% for Referrals',
                'status' => '1',
                'created_at' => '2023-05-23 00:17:13',
                'updated_at' => '2023-05-23 00:17:13',
            ),
        ));
        
        
    }
}