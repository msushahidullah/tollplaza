<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerSubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_subscriptions')->delete();
        
        \DB::table('seller_subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'plan_id' => 4,
                'user_id' => 6,
                'txn_id' => 'PAYID-MGS466A68G400324P721392T',
                'method' => 'Paypal',
                'start_date' => '2021-11-30 12:45:33',
                'end_date' => '2022-11-30 12:45:33',
                'original_amount' => 200.0,
                'paid_amount' => 200.0,
                'paid_currency' => 'USD',
                'status' => 0,
                'created_at' => '2021-11-30 12:45:33',
                'updated_at' => '2021-12-27 23:16:28',
            ),
            1 => 
            array (
                'id' => 2,
                'plan_id' => 5,
                'user_id' => 6,
                'txn_id' => 'ch_1KBNHAIIJkWvsnWlHkuU1Q0L',
                'method' => 'Stripe',
                'start_date' => '2021-12-27 11:16:28',
                'end_date' => '2022-01-26 11:16:28',
                'original_amount' => 100.0,
                'paid_amount' => 7611.55,
                'paid_currency' => 'INR',
                'status' => 0,
                'created_at' => '2021-12-27 23:16:28',
                'updated_at' => '2021-12-29 11:51:47',
            ),
            2 => 
            array (
                'id' => 3,
                'plan_id' => 1,
                'user_id' => 6,
                'txn_id' => 'PAYID-MHF74WY89U918239T497483F',
                'method' => 'Paypal',
                'start_date' => '2021-12-29 11:51:47',
                'end_date' => '2022-12-29 11:51:47',
                'original_amount' => 10.0,
                'paid_amount' => 10.0,
                'paid_currency' => 'USD',
                'status' => 0,
                'created_at' => '2021-12-29 11:51:47',
                'updated_at' => '2021-12-30 14:44:18',
            ),
            3 => 
            array (
                'id' => 4,
                'plan_id' => 2,
                'user_id' => 6,
                'txn_id' => 'jCmjjmzX8e',
                'method' => 'By Admin',
                'start_date' => '2021-12-30 02:44:18',
                'end_date' => '2022-12-30 02:44:18',
                'original_amount' => 50.0,
                'paid_amount' => 50.0,
                'paid_currency' => 'USD',
                'status' => 1,
                'created_at' => '2021-12-30 14:44:18',
                'updated_at' => '2021-12-30 14:44:18',
            ),
            4 => 
            array (
                'id' => 5,
                'plan_id' => 3,
                'user_id' => 21,
                'txn_id' => 'PAYID-MIKIDHI1F468807DD280073U',
                'method' => 'Paypal',
                'start_date' => '2022-02-22 11:55:08',
                'end_date' => '2024-02-22 11:55:08',
                'original_amount' => 100.0,
                'paid_amount' => 100.0,
                'paid_currency' => 'USD',
                'status' => 1,
                'created_at' => '2022-02-22 11:55:08',
                'updated_at' => '2022-02-22 11:55:08',
            ),
            5 => 
            array (
                'id' => 6,
                'plan_id' => 3,
                'user_id' => 22,
                'txn_id' => 'PAYID-MIKINJQ4D414597H92708132',
                'method' => 'Paypal',
                'start_date' => '2022-02-22 12:16:58',
                'end_date' => '2024-02-22 12:16:58',
                'original_amount' => 100.0,
                'paid_amount' => 100.0,
                'paid_currency' => 'USD',
                'status' => 1,
                'created_at' => '2022-02-22 12:16:58',
                'updated_at' => '2022-02-22 12:16:58',
            ),
        ));
        
        
    }
}