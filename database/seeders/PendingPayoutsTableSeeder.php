<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendingPayoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pending_payouts')->delete();
        
        \DB::table('pending_payouts')->insert(array (
            0 => 
            array (
                'id' => 3,
                'orderid' => 15,
                'sellerid' => 6,
                'paidby' => 6,
                'paid_in' => 'USD',
                'subtotal' => 209.92,
                'tax' => 46.08,
                'shipping' => 12.0,
                'orderamount' => 268.0,
                'created_at' => '2022-06-09 18:39:36',
                'updated_at' => '2022-06-09 18:39:36',
            ),
        ));
        
        
    }
}