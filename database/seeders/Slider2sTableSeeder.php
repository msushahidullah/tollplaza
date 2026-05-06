<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Slider2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider2s')->delete();
        
        \DB::table('slider2s')->insert(array (
            0 => 
            array (
                'id' => 4,
                'link_by' => 'cat',
                'category_id' => 1,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":null}',
                'heading' => '{"en":null}',
                'buttonname' => '{"en":null}',
                'btntextcolor' => '#000000',
                'btnbgcolor' => '#000000',
                'moredesc' => NULL,
                'moredesccolor' => NULL,
                'image' => '165485521315958270621580986986blog-03.png',
                'url' => NULL,
                'headingtextcolor' => '#000000',
                'subheadingcolor' => '#000000',
                'product_id' => NULL,
                'status' => '0',
                'created_at' => '2022-06-11 06:30:13',
                'updated_at' => '2022-06-11 06:30:13',
            ),
            1 => 
            array (
                'id' => 5,
                'link_by' => 'pro',
                'category_id' => NULL,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":null}',
                'heading' => '{"en":null}',
                'buttonname' => '{"en":"TEST BUTTON"}',
                'btntextcolor' => '#000000',
                'btnbgcolor' => '#000000',
                'moredesc' => NULL,
                'moredesccolor' => NULL,
                'image' => '1654855296000000000jayagrocer.jpg',
                'url' => NULL,
                'headingtextcolor' => '#000000',
                'subheadingcolor' => '#000000',
                'product_id' => 8,
                'status' => '0',
                'created_at' => '2022-06-11 06:31:37',
                'updated_at' => '2022-06-11 07:32:00',
            ),
            2 => 
            array (
                'id' => 6,
                'link_by' => 'url',
                'category_id' => NULL,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":"Slider 2 Top Heading Info"}',
                'heading' => '{"en":"Slider 2 Sub Heading Info"}',
                'buttonname' => '{"en":"Slider 2 Btn2 Text"}',
                'btntextcolor' => '#3B7DD5',
                'btnbgcolor' => '#D9752B',
                'moredesc' => NULL,
                'moredesccolor' => NULL,
                'image' => '1654857565flashdeal_6152b16bcab6d.jpg',
                'url' => 'https://www.google.com',
                'headingtextcolor' => '#E12258',
                'subheadingcolor' => '#39C646',
                'product_id' => NULL,
                'status' => '1',
                'created_at' => '2022-06-11 07:09:25',
                'updated_at' => '2022-06-11 07:09:25',
            ),
            3 => 
            array (
                'id' => 8,
                'link_by' => 'none',
                'category_id' => NULL,
                'child' => NULL,
                'grand_id' => NULL,
                'topheading' => '{"en":null}',
                'heading' => '{"en":null}',
                'buttonname' => '{"en":null}',
                'btntextcolor' => '#000000',
                'btnbgcolor' => '#000000',
                'moredesc' => NULL,
                'moredesccolor' => NULL,
                'image' => '1654858549testsmall.png',
                'url' => NULL,
                'headingtextcolor' => '#000000',
                'subheadingcolor' => '#000000',
                'product_id' => NULL,
                'status' => '0',
                'created_at' => '2022-06-11 07:25:49',
                'updated_at' => '2022-06-11 07:55:38',
            ),
        ));
        
        
    }
}