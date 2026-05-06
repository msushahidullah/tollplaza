<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionVouchersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscription_vouchers')->delete();
        
        \DB::table('subscription_vouchers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'BASIC100',
                'distype' => 'per',
                'amount' => '5',
                'link_by' => 'allplans',
                'dis_applytype' => 'upto',
                'plan_id' => NULL,
                'maxusage' => 5,
                'expirydate' => '2021-10-30 00:00:00',
                'created_at' => '2021-07-16 11:07:27',
                'updated_at' => '2021-11-29 15:58:30',
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'BASIC200',
                'distype' => 'per',
                'amount' => '10',
                'link_by' => 'linktoplan',
                'dis_applytype' => 'fixed',
                'plan_id' => 1,
                'maxusage' => 10,
                'expirydate' => '2022-01-16 00:00:00',
                'created_at' => '2021-08-31 15:06:44',
                'updated_at' => '2021-10-25 09:18:24',
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'BB100',
                'distype' => 'fix',
                'amount' => '10',
                'link_by' => 'allplans',
                'dis_applytype' => 'fixed',
                'plan_id' => NULL,
                'maxusage' => 10,
                'expirydate' => '2021-11-20 00:00:00',
                'created_at' => '2021-11-30 11:59:56',
                'updated_at' => '2021-11-30 11:59:56',
                'status' => 1,
            ),
        ));
        
        
    }
}