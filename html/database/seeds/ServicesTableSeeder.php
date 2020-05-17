<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'test',
                'discription' => 'disc',
                'start' => '0000-00-00 00:00:00',
                'expiry' => '0000-00-00 00:00:00',
                'active' => 1,
                'user_id' => 1,
                'created_at' => '2020-05-15 22:53:07',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2020-05-16 00:00:00',
                'expiry' => '2020-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:50:27',
                'updated_at' => '2020-05-16 05:50:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2020-05-16 00:00:00',
                'expiry' => '2020-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:51:25',
                'updated_at' => '2020-05-16 05:51:25',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2021-05-16 00:00:00',
                'expiry' => '2021-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:54:52',
                'updated_at' => '2020-05-16 05:54:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2021-05-16 00:00:00',
                'expiry' => '2021-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:55:07',
                'updated_at' => '2020-05-16 05:55:07',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2021-05-16 00:00:00',
                'expiry' => '2021-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:56:16',
                'updated_at' => '2020-05-16 05:56:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => '2020-05-16 00:00:00',
                'expiry' => '2020-06-16 00:00:00',
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:58:59',
                'updated_at' => '2020-05-16 05:58:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:59:22',
                'updated_at' => '2020-05-16 05:59:22',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 05:59:29',
                'updated_at' => '2020-05-16 05:59:29',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:00:06',
                'updated_at' => '2020-05-16 06:00:06',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:01:02',
                'updated_at' => '2020-05-16 06:01:02',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:02:10',
                'updated_at' => '2020-05-16 06:02:10',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:02:21',
                'updated_at' => '2020-05-16 06:02:21',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:02:37',
                'updated_at' => '2020-05-16 06:02:37',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:03:01',
                'updated_at' => '2020-05-16 06:03:01',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:03:24',
                'updated_at' => '2020-05-16 06:03:24',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:04:03',
                'updated_at' => '2020-05-16 06:04:03',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:04:17',
                'updated_at' => '2020-05-16 06:04:17',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:04:26',
                'updated_at' => '2020-05-16 06:04:26',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:05:00',
                'updated_at' => '2020-05-16 06:05:00',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:05:29',
                'updated_at' => '2020-05-16 06:05:29',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'nasir',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 0,
                'user_id' => 1,
                'created_at' => '2020-05-16 06:07:53',
                'updated_at' => '2020-05-16 06:07:53',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'nasiruddin',
                'discription' => 'Individuals/Freelancers',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 1,
                'user_id' => 9,
                'created_at' => '2020-05-16 17:43:24',
                'updated_at' => '2020-05-16 17:47:31',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'nasiruddin',
                'discription' => 'Medium Companies',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 1,
                'user_id' => 10,
                'created_at' => '2020-05-17 06:11:59',
                'updated_at' => '2020-05-17 06:12:18',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'nasir',
                'discription' => 'Small Companies',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 1,
                'user_id' => 11,
                'created_at' => '2020-05-17 06:14:30',
                'updated_at' => '2020-05-17 06:14:46',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'nasir',
                'discription' => 'Medium Companies',
                'start' => NULL,
                'expiry' => NULL,
                'active' => 1,
                'user_id' => 12,
                'created_at' => '2020-05-17 07:42:11',
                'updated_at' => '2020-05-17 07:42:32',
            ),
        ));
        
        
    }
}