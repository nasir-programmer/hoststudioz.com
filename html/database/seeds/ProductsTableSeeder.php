<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Basic',
                'description' => 'Individuals/Freelancers',
                'price' => 1000.0,
                'cycle' => 'Monthly',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Basic',
                'description' => 'Individuals/Freelanc',
                'price' => 1000.0,
                'cycle' => 'Monthly',
            ),
        ));
        
        
    }
}