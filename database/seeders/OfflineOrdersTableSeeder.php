<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfflineOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offline_orders')->delete();
        
        \DB::table('offline_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 'EODD61516d568ac74',
                'shipping_method' => 'Shiprocket',
                'shipping_rate' => 10.0,
                'txn_id' => 'EODD61516d568ac74',
                'payment_method' => 'Online',
                'order_status' => 'proccessed',
                'invoice_date' => '2021-09-23 00:00:00',
                'subtotal' => 17000.0,
                'total_shipping' => 10.0,
                'tax_rate' => 15.0,
                'total_tax' => 2550.0,
                'tax_include' => 0,
                'adjustable_amount' => 5.0,
                'grand_total' => 19565.0,
                'customer_name' => 'Admin',
                'customer_id' => '1',
                'customer_email' => 'admin@mediacity.co.in',
                'customer_phone' => '1645787953',
                'customer_shipping_address' => 'Sector -62 , RCM Area',
                'customer_billing_address' => 'Sector -62 , RCM Area',
                'country_id' => 101,
                'state_id' => 33,
                'city_id' => 3327,
                'customer_pincode' => '311001',
                'additional_note' => 'Pack order with gift wrapping',
                'created_at' => '2021-09-27 07:05:58',
                'updated_at' => '2021-09-27 07:22:11',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 'BGTP1010',
                'shipping_method' => 'Shiprocket',
                'shipping_rate' => 10.0,
                'txn_id' => 'BGTP1010',
                'payment_method' => 'Online',
                'order_status' => 'processed',
                'invoice_date' => '2022-04-13 00:00:00',
                'subtotal' => 0.0,
                'total_shipping' => 10.0,
                'tax_rate' => 0.0,
                'total_tax' => 0.0,
                'tax_include' => 1,
                'adjustable_amount' => 0.0,
                'grand_total' => 1010.0,
                'customer_name' => 'testing',
                'customer_id' => '67',
                'customer_email' => 'itsparth1992@gmail.ccom',
                'customer_phone' => '9876543210',
                'customer_shipping_address' => 'delhi',
                'customer_billing_address' => 'delhi',
                'country_id' => 101,
                'state_id' => 10,
                'city_id' => 706,
                'customer_pincode' => '110085',
                'additional_note' => 'jakfgd',
                'created_at' => '2022-04-13 01:58:31',
                'updated_at' => '2022-04-13 01:58:31',
            ),
        ));
        
        
    }
}