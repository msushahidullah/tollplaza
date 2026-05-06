<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerpayoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellerpayouts')->delete();
        
        \DB::table('sellerpayouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payoutid' => 'iwPo9B',
                'orderid' => 16,
                'sellerid' => 6,
                'paidby' => 1,
                'paid_in' => 'USD',
                'orderamount' => 385.64,
                'txn_fee' => 0.25,
                'txn_id' => 'RUUE6U3HT4MQS',
                'status' => NULL,
                'txn_type' => NULL,
                'paidvia' => 'Paypal',
                'acno' => NULL,
                'ifsccode' => NULL,
                'bankname' => NULL,
                'acholder' => NULL,
                'pending_payout_id' => 2,
                'created_at' => '2021-08-12 16:01:09',
                'updated_at' => '2021-08-12 16:01:09',
            ),
            1 => 
            array (
                'id' => 2,
                'payoutid' => 'PjyAar',
                'orderid' => 20,
                'sellerid' => 6,
                'paidby' => 1,
                'paid_in' => 'USD',
                'orderamount' => 443.68,
                'txn_fee' => 0.25,
                'txn_id' => '6DFF6APWUAHGL',
                'status' => NULL,
                'txn_type' => NULL,
                'paidvia' => 'Paypal',
                'acno' => NULL,
                'ifsccode' => NULL,
                'bankname' => NULL,
                'acholder' => NULL,
                'pending_payout_id' => 1,
                'created_at' => '2021-08-19 11:01:41',
                'updated_at' => '2021-08-19 11:01:41',
            ),
            2 => 
            array (
                'id' => 3,
                'payoutid' => 'hrpDlu',
                'orderid' => 32,
                'sellerid' => 6,
                'paidby' => 1,
                'paid_in' => 'USD',
                'orderamount' => 443.68,
                'txn_fee' => 0.25,
                'txn_id' => 'HTZGLF79N4G2W',
                'status' => NULL,
                'txn_type' => NULL,
                'paidvia' => 'Paypal',
                'acno' => NULL,
                'ifsccode' => NULL,
                'bankname' => NULL,
                'acholder' => NULL,
                'pending_payout_id' => 2,
                'created_at' => '2021-09-22 18:45:51',
                'updated_at' => '2021-09-22 18:45:51',
            ),
        ));
        
        
    }
}