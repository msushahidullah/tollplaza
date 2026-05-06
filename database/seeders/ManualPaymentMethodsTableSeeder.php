<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManualPaymentMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manual_payment_methods')->delete();
        
        \DB::table('manual_payment_methods')->insert(array (
            0 => 
            array (
                'id' => 2,
                'payment_name' => 'UPI/QR Payments',
                'description' => '<h5><span style="color: #000000;">You can pay us directly at <a style="color: #000000;" href="mailto:example@example.com">example@example.com</a></span></h5>',
                'thumbnail' => 'mp_5fcb18891eb8e.webp',
                'status' => 1,
                'created_at' => '2020-12-02 14:14:07',
                'updated_at' => '2021-07-30 17:24:11',
            ),
            1 => 
            array (
                'id' => 3,
                'payment_name' => 'Cheque',
                'description' => '<p>Please send all cheques at this details</p>',
                'thumbnail' => '',
                'status' => 1,
                'created_at' => '2020-12-10 10:39:31',
                'updated_at' => '2021-07-30 17:24:03',
            ),
        ));
        
        
    }
}