<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WishlistCollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wishlist_collections')->delete();
        
        \DB::table('wishlist_collections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'My Collection',
                'user_id' => 1,
                'created_at' => '2021-01-13 10:57:58',
                'updated_at' => '2021-01-13 10:57:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'My Second Collection',
                'user_id' => 1,
                'created_at' => '2021-01-13 11:04:28',
                'updated_at' => '2021-01-13 11:04:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Shoes Collection',
                'user_id' => 1,
                'created_at' => '2021-02-09 09:50:56',
                'updated_at' => '2021-02-09 09:50:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Testing',
                'user_id' => 1,
                'created_at' => '2022-04-25 08:53:08',
                'updated_at' => '2022-04-25 08:53:08',
            ),
        ));
        
        
    }
}