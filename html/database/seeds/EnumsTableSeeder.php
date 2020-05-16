<?php

use Illuminate\Database\Seeder;

class EnumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enums')->delete();
        
        \DB::table('enums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'keys' => 'Ram',
                'value' => '1024 MB',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'keys' => 'Core CPU',
                'value' => '1 X 2.40 GHz',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'keys' => 'Bandwidth',
                'value' => '1024 GB',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'keys' => 'Fully Managed',
                'value' => '',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'keys' => '24/7',
                'value' => 'support',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'keys' => 'Free',
                'value' => 'Plesk Panel',
                'order' => 6,
            ),
        ));
        
        
    }
}