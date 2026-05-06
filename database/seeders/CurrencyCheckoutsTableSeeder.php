<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrencyCheckoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currency_checkouts')->delete();
        
        \DB::table('currency_checkouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'multicurrency_id' => 6,
                'currency' => 'INR',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => 'instamojo,wallet,paypal,stripe,cashOnDelivery',
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:31',
            ),
            1 => 
            array (
                'id' => 2,
                'multicurrency_id' => 1,
                'currency' => 'USD',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => 'instamojo,paypal',
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:30',
            ),
            2 => 
            array (
                'id' => 3,
                'multicurrency_id' => 8,
                'currency' => 'KES',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:34',
            ),
            3 => 
            array (
                'id' => 4,
                'multicurrency_id' => 7,
                'currency' => 'BDT',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => 'bkash',
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:32',
            ),
            4 => 
            array (
                'id' => 5,
                'multicurrency_id' => 10,
                'currency' => 'GHS',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => 'paypal,stripe,paystack',
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:34',
            ),
            5 => 
            array (
                'id' => 6,
                'multicurrency_id' => 9,
                'currency' => 'TRY',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:36',
            ),
            6 => 
            array (
                'id' => 7,
                'multicurrency_id' => 11,
                'currency' => 'NGN',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => 'dpopayment,cashOnDelivery,UPI/QR Payments,Cheque',
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:30',
            ),
            7 => 
            array (
                'id' => 8,
                'multicurrency_id' => 12,
                'currency' => 'AUD',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:30',
            ),
            8 => 
            array (
                'id' => 9,
                'multicurrency_id' => 13,
                'currency' => 'IDR',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:32',
            ),
            9 => 
            array (
                'id' => 10,
                'multicurrency_id' => 14,
                'currency' => 'NPR',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:30',
            ),
            10 => 
            array (
                'id' => 11,
                'multicurrency_id' => 15,
                'currency' => 'XAF',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:34',
            ),
            11 => 
            array (
                'id' => 12,
                'multicurrency_id' => 16,
                'currency' => 'VND',
                'default' => '0',
                'checkout_currency' => '1',
                'payment_method' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-10-05 08:51:30',
            ),
        ));
        
        
    }
}