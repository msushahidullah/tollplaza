<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_classes')->delete();
        
        \DB::table('tax_classes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'GST',
                'des' => 'Demo Tax',
                'taxRate_id' => '{"1":"5","2":"2","3":"4"}',
                'priority' => '["3","2","1"]',
                'based_on' => '{"1":"billing","2":"billing","3":"store"}',
                'created_at' => '2020-01-15 16:53:17',
                'updated_at' => '2020-07-24 23:53:41',
                'status' => '0',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'US Tax',
                'des' => 'United States Tax',
                'taxRate_id' => '{"1":"3","2":"3"}',
                'priority' => '["1","2"]',
                'based_on' => '{"1":"billing","2":"store"}',
                'created_at' => '2020-07-08 12:31:38',
                'updated_at' => '2020-07-08 12:31:38',
                'status' => '0',
            ),
        ));
        
        
    }
}