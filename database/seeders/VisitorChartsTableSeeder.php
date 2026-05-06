<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisitorChartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visitor_charts')->delete();
        
        \DB::table('visitor_charts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip_address' => '127.0.0.1',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2021-03-22 15:23:55',
                'updated_at' => '2021-03-22 15:23:55',
            ),
            1 => 
            array (
                'id' => 2,
                'ip_address' => '::1',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2021-03-31 10:55:59',
                'updated_at' => '2021-03-31 10:55:59',
            ),
            2 => 
            array (
                'id' => 3,
                'ip_address' => '192.168.1.144',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2021-11-11 11:27:49',
                'updated_at' => '2021-11-11 11:27:49',
            ),
            3 => 
            array (
                'id' => 4,
                'ip_address' => '172.70.147.189',
                'country_code' => 'SG',
                'visit_count' => '1',
                'created_at' => '2022-02-23 21:48:27',
                'updated_at' => '2022-02-23 21:48:27',
            ),
            4 => 
            array (
                'id' => 5,
                'ip_address' => '192.168.1.102',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2023-10-04 11:35:53',
                'updated_at' => '2023-10-04 11:35:53',
            ),
            5 => 
            array (
                'id' => 6,
                'ip_address' => '192.168.1.179',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2023-10-04 15:00:27',
                'updated_at' => '2023-10-04 15:00:27',
            ),
            6 => 
            array (
                'id' => 7,
                'ip_address' => '192.168.1.187',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2023-10-05 09:20:08',
                'updated_at' => '2023-10-05 09:20:08',
            ),
            7 => 
            array (
                'id' => 8,
                'ip_address' => '172.71.94.144',
                'country_code' => 'NL',
                'visit_count' => '1',
                'created_at' => '2024-03-21 12:38:04',
                'updated_at' => '2024-03-21 12:38:04',
            ),
            8 => 
            array (
                'id' => 9,
                'ip_address' => '192.168.1.150',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-02-17 10:44:04',
                'updated_at' => '2025-02-17 10:44:04',
            ),
            9 => 
            array (
                'id' => 10,
                'ip_address' => '192.168.1.148',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-02-17 10:47:01',
                'updated_at' => '2025-02-17 10:47:01',
            ),
            10 => 
            array (
                'id' => 11,
                'ip_address' => '192.168.1.148',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-02-17 10:47:01',
                'updated_at' => '2025-02-17 10:47:01',
            ),
            11 => 
            array (
                'id' => 12,
                'ip_address' => '192.168.1.148',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-02-17 10:47:01',
                'updated_at' => '2025-02-17 10:47:01',
            ),
            12 => 
            array (
                'id' => 13,
                'ip_address' => '192.168.1.189',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-04-18 14:44:19',
                'updated_at' => '2025-04-18 14:44:19',
            ),
            13 => 
            array (
                'id' => 14,
                'ip_address' => '192.168.1.191',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-04-28 15:59:30',
                'updated_at' => '2025-04-28 15:59:30',
            ),
            14 => 
            array (
                'id' => 15,
                'ip_address' => '192.168.163.189',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-04-28 17:10:18',
                'updated_at' => '2025-04-28 17:10:18',
            ),
            15 => 
            array (
                'id' => 16,
                'ip_address' => '192.168.1.140',
                'country_code' => 'US',
                'visit_count' => '1',
                'created_at' => '2025-09-22 09:37:06',
                'updated_at' => '2025-09-22 09:37:06',
            ),
        ));
        
        
    }
}