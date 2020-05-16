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
                'keys' => 'Storage',
                'value' => '20 GB',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'keys' => 'Fully Managed',
                'value' => '',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'keys' => '24/7',
                'value' => 'support',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 1,
                'keys' => 'Free',
                'value' => 'Plesk Panel',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 2,
                'keys' => 'Ram',
                'value' => '2 GB',
                'order' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 2,
                'keys' => 'Core CPU',
                'value' => '2 X 2.40 GHz',
                'order' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 2,
                'keys' => 'Bandwidth',
                'value' => '2000 GB',
                'order' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 2,
                'keys' => 'Storage',
                'value' => '80 GB',
                'order' => 4,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 2,
                'keys' => 'Fully Managed',
                'value' => '',
                'order' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 2,
                'keys' => '24/7',
                'value' => 'support',
                'order' => 6,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 2,
                'keys' => 'Free',
                'value' => 'Plesk Panel',
                'order' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 3,
                'keys' => 'Ram',
                'value' => '4 GB',
                'order' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 3,
                'keys' => 'Core CPU',
                'value' => '3 X 2.40 GHz',
                'order' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 3,
                'keys' => 'Bandwidth',
                'value' => '4000 GB',
                'order' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 3,
                'keys' => 'Storage',
                'value' => '160 GB',
                'order' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 3,
                'keys' => 'Fully Managed',
                'value' => '',
                'order' => 5,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 3,
                'keys' => '24/7',
                'value' => 'support',
                'order' => 6,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 3,
                'keys' => 'Free',
                'value' => 'Plesk Panel',
                'order' => 7,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 4,
                'keys' => 'Ram',
                'value' => '8 GB',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 4,
                'keys' => 'Core CPU',
                'value' => '4 X 2.40 GHz',
                'order' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 4,
                'keys' => 'Bandwidth',
                'value' => '8000 GB',
                'order' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 4,
                'keys' => 'Storage',
                'value' => '320 GB',
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 4,
                'keys' => 'Fully Managed',
                'value' => '',
                'order' => 5,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 4,
                'keys' => '24/7',
                'value' => 'support',
                'order' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 4,
                'keys' => 'Free',
                'value' => 'Plesk Panel',
                'order' => 7,
            ),
        ));
        
        
    }
}