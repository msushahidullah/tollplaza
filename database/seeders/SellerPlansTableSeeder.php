<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_plans')->delete();
        
        \DB::table('seller_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'unique_id' => '3ed93a57-2f00-476b-b7f6-b2af12fa74ac',
                'name' => 'Basic',
                'price' => 10.0,
                'detail' => '<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 101 Product Upload limit</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 day support time</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 day payout</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 day store request approval time</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; No CSV Upload</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 year validity&nbsp;</span></p>',
                'validity' => 1,
                'period' => 'year',
                'product_create' => 101,
                'csv_product' => 0,
                'status' => 1,
                'created_at' => '2021-05-12 15:28:54',
                'updated_at' => '2021-05-12 17:13:10',
            ),
            1 => 
            array (
                'id' => 2,
                'unique_id' => '4422b0d3-9231-4037-9e94-1ab2d3c973dc',
                'name' => 'Silver',
                'price' => 50.0,
                'detail' => '<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1000 Product Upload limit</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Instant support same day</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 day payout</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 day store request approval time</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; NO CSV Upload</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 year validity&nbsp;</span></p>',
                'validity' => 1,
                'period' => 'year',
                'product_create' => 5,
                'csv_product' => 0,
                'status' => 1,
                'created_at' => '2021-05-12 15:29:35',
                'updated_at' => '2021-05-12 17:13:29',
            ),
            2 => 
            array (
                'id' => 3,
                'unique_id' => '566ec9a3-1752-4451-aa5a-89c8e1e3b65d',
                'name' => 'Diamond',
                'price' => 100.0,
                'detail' => '<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 10000 Product Upload limit</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Instant support time same day</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Same day payout if any.</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Instant store request approval time</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams;<strong> Excel CSV Product Uploads.</strong></span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 year validity&nbsp;</span></p>',
                'validity' => 2,
                'period' => 'year',
                'product_create' => 10000,
                'csv_product' => 1,
                'status' => 1,
                'created_at' => '2021-05-12 15:30:18',
                'updated_at' => '2021-05-13 11:26:42',
            ),
            3 => 
            array (
                'id' => 4,
                'unique_id' => '566ec9a3-1752-4451-aa5a-89c8e1e3b12a',
                'name' => 'Enterprise',
                'price' => 200.0,
                'detail' => '<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 10000 Product Upload limit</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Instant support time same day</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Same day payout if any.</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; Instant store request approval time</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams;<strong> Excel CSV Product Uploads.</strong></span></p>
<p style="text-align: center;"><span style="font-size: 12pt; color: #000000;">&diams; 1 year validity&nbsp;</span></p>',
                'validity' => 1,
                'period' => 'year',
                'product_create' => 1000000,
                'csv_product' => 1,
                'status' => 1,
                'created_at' => '2021-05-12 15:30:18',
                'updated_at' => '2021-05-13 11:26:42',
            ),
            4 => 
            array (
                'id' => 5,
                'unique_id' => '5c8333ae-b6c7-4fd3-9121-dabe4d6adabf',
                'name' => 'Test',
                'price' => 100.0,
                'detail' => '<p>Test</p>',
                'validity' => 1,
                'period' => 'month',
                'product_create' => 50,
                'csv_product' => 1,
                'status' => 1,
                'created_at' => '2021-11-30 11:56:17',
                'updated_at' => '2021-11-30 11:57:28',
            ),
        ));
        
        
    }
}