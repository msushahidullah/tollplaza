<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryBannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_banners')->delete();
        
        
        
    }
}