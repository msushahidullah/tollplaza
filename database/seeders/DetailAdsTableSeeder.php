<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailAdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detail_ads')->delete();
        
        \DB::table('detail_ads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'top_heading' => '{"en":null}',
                'hcolor' => NULL,
                'sheading' => '{"en":null}',
                'scolor' => NULL,
                'adimage' => '15958367031579775253LHS-banner.jpg',
                'linkby' => 'category',
                'btn_text' => '{"en":null}',
                'btn_txt_color' => NULL,
                'btn_bg_color' => NULL,
                'adsensecode' => NULL,
                'url' => NULL,
                'position' => 'category',
                'pro_id' => NULL,
                'linked_id' => 2,
                'cat_id' => 1,
                'status' => 1,
                'show_btn' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'top_heading' => '{"en":null}',
                'hcolor' => NULL,
                'sheading' => '{"en":null}',
                'scolor' => NULL,
                'adimage' => '1615782828LHS-banner.jpg',
                'linkby' => 'category',
                'btn_text' => '{"en":null}',
                'btn_txt_color' => NULL,
                'btn_bg_color' => NULL,
                'adsensecode' => NULL,
                'url' => NULL,
                'position' => 'prodetail',
                'pro_id' => NULL,
                'linked_id' => 149,
                'cat_id' => 1,
                'status' => 1,
                'show_btn' => 0,
            ),
        ));
        
        
    }
}