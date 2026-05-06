<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpenaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('openais')->delete();
        
        \DB::table('openais')->insert(array (
            0 => 
            array (
                'id' => 55,
                'generate' => 'Text Generate',
                'user_id' => '1',
                'prompt' => 'Genrate a 4 in this English with specific wordpress',
                'response' => '{"role":"assistant","content":"To generate a 4 specifically on a WordPress site, ensure you have performed the necessary steps to create a new page or post on your WordPress website. Include the digit 4 in the content or in the title of the page or post. Then publish or update it on your WordPress site."}',
                'created_at' => '2024-03-13 04:43:58',
                'updated_at' => '2024-03-13 04:43:58',
            ),
            1 => 
            array (
                'id' => 56,
                'generate' => 'Image Generate',
                'user_id' => '1',
                'prompt' => 'cars',
                'response' => 'http://localhost/emart/public/images/openai/Mkbldx9OEtf5-.png',
                'created_at' => '2024-03-13 04:44:31',
                'updated_at' => '2024-03-13 04:44:31',
            ),
        ));
        
        
    }
}