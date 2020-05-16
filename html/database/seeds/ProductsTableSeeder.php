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
                'name' => 'Starter',
                'description' => 'Small Companies',
                'price' => 1600.0,
                'cycle' => 'Monthly',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Business',
                'description' => 'Medium Companies',
                'price' => 3000.0,
                'cycle' => 'Monthly',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Enterprise',
                'description' => 'Large Companies',
                'price' => 5500.0,
                'cycle' => 'Monthly',
            ),
        ));
        
        
    }
}