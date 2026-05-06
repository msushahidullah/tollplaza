<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Slider3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider3s')->delete();
        
        \DB::table('slider3s')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link_by' => 'url',
                'category_id' => NULL,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":"Slider3 Top Head"}',
                'heading' => '{"en":"Slider3 Sub Head"}',
                'buttonname' => '{"en":"Button Text 3"}',
                'btntextcolor' => '#000000',
                'btnbgcolor' => '#2C4B8A',
                'moredesc' => 'Description is here',
            'moredesccolor' => 'rgb(63, 128, 188)',
                'image' => '1654849810curbside.png',
                'url' => 'https://ecomm.oneutama.info/blog',
                'headingtextcolor' => '#74CA33',
                'subheadingcolor' => '#9A2C8F',
                'product_id' => NULL,
                'status' => '1',
                'created_at' => '2022-06-11 05:00:11',
                'updated_at' => '2022-06-11 05:15:52',
            ),
            1 => 
            array (
                'id' => 3,
                'link_by' => 'cat',
                'category_id' => 1,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":"Top3 Head line 2"}',
                'heading' => '{"en":"Top3 SubHead line 2"}',
                'buttonname' => '{"en":"Top3 Btn Text line 2"}',
                'btntextcolor' => '#C2C25E',
                'btnbgcolor' => '#000000',
                'moredesc' => NULL,
                'moredesccolor' => NULL,
                'image' => '1654851080curbside2.png',
                'url' => NULL,
                'headingtextcolor' => '#5C599C',
                'subheadingcolor' => '#71B8B1',
                'product_id' => NULL,
                'status' => '1',
                'created_at' => '2022-06-11 05:21:20',
                'updated_at' => '2022-06-11 07:57:41',
            ),
        ));
        
        
    }
}