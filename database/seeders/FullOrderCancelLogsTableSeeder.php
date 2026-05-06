<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FullOrderCancelLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('full_order_cancel_logs')->delete();
        
        
        
    }
}