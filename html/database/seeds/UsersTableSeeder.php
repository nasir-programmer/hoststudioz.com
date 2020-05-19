<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'nasir',
                'email' => 'hoststudioztest@gmail.com',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fs1kJfEVpaVfWapiulroEeCKICXSqXPXNjp2D8YqXpvGxBbQ8li72',
                'remember_token' => NULL,
                'created_at' => '2020-05-15 15:55:45',
                'updated_at' => '2020-05-15 15:55:45',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'nas',
                'email' => 'nas@ms.c',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$4f0IVIBe27zclKPpymPEzeXIJ84INQQODYsnEqYy/DC1Zms4JZTPS',
                'remember_token' => NULL,
                'created_at' => '2020-05-15 18:34:34',
                'updated_at' => '2020-05-15 18:34:34',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'sdsd',
                'email' => 'ads@sd.d',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$9jb5.14QdFw0hQxms6bXte61QS/PqjIJmkzE7iKt4tXkqOkds4w2q',
                'remember_token' => NULL,
                'created_at' => '2020-05-15 18:48:01',
                'updated_at' => '2020-05-15 18:48:01',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'sdsd',
                'email' => 'ads@sd.dw',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$xv3ZLvfsGdIVeUBNnVewW.JoI.UvOEsrYBVGVGKUqE7f4yNP.lWP2',
                'remember_token' => NULL,
                'created_at' => '2020-05-15 18:48:40',
                'updated_at' => '2020-05-15 18:48:40',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ravi',
                'email' => 'ph9716942965@gmail.com',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$.gSGePjDYgbdwh/Wv.F1nuuic2u8.1Dq49eBklT3CEFxq9PeM4MjO',
                'remember_token' => NULL,
                'created_at' => '2020-05-16 06:14:28',
                'updated_at' => '2020-05-16 06:14:28',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ravi',
                'email' => 'ph9716942962@gmail.com',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Se4uI/tIQaihhv9POb34iOyQA/6AySol5q.XdocTtFtkv5R5Jri3S',
                'remember_token' => NULL,
                'created_at' => '2020-05-16 06:25:25',
                'updated_at' => '2020-05-16 06:25:25',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ravi',
                'email' => 'ph9716942961@gmail.com',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$jvO988LIcyU6ATcTMyHVzOkLB78zh40/0Ws2zYj/1dBR5DuSXS3QW',
                'remember_token' => NULL,
                'created_at' => '2020-05-16 06:27:56',
                'updated_at' => '2020-05-16 06:27:56',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ravi',
                'email' => 'ph9716942960@gmail.com',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q4mzjCc6XBrHCXcDwPa9tOcyFzwmAD8Ev5pSyb48L1wdTFO73xseW',
                'remember_token' => NULL,
                'created_at' => '2020-05-16 06:29:14',
                'updated_at' => '2020-05-16 06:29:14',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'nasiruddin',
                'email' => 'nasirtest@programmer.net',
                'mobile' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$hN4BuPKcNx/kC6CmBOz7y.xdnFWMOr3JLVSnlxhQ4/G6pyppi3ia.',
                'remember_token' => NULL,
                'created_at' => '2020-05-16 17:43:24',
                'updated_at' => '2020-05-16 17:43:24',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'nasiruddin',
                'email' => 'nasiruddisdsdn@thriwe.com',
                'mobile' => 9716942961,
                'email_verified_at' => NULL,
                'password' => '$2y$10$r49dI9ypzO.Ee1otsXl/BOD5Pc7D1fnLuzOlPFlARHoaNdHU68Hqe',
                'remember_token' => NULL,
                'created_at' => '2020-05-17 06:11:59',
                'updated_at' => '2020-05-17 06:11:59',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'nasir',
                'email' => 'nasiruddin2@thriwe.com',
                'mobile' => 9716942265,
                'email_verified_at' => NULL,
                'password' => '$2y$10$m22O60IAvvxivL8GBLSEIOgV5Z.3s1vbPZXozNvaFx7Q/hb/FUXga',
                'remember_token' => '5VLJCPlG9tbxwv2RJTsrjkIebuTQ3A3Smtiht4cCbb3zow2CSJa39LOF4WhE',
                'created_at' => '2020-05-17 06:14:30',
                'updated_at' => '2020-05-17 06:14:30',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'nasir',
                'email' => 'sdds@thriwe.com',
                'mobile' => 97169,
                'email_verified_at' => NULL,
                'password' => '$2y$10$M6ivGvwHCGjyyzDqRz.DQOCYw.eFO2RYE9cK0Y2qX9TrtX6epy9o2',
                'remember_token' => 'azQ9rqpAXcTa9wlOCEV6zusNcwznhliNBBEUpqM6nySyhwTFbAZ64CjXoGVu',
                'created_at' => '2020-05-17 07:42:11',
                'updated_at' => '2020-05-17 07:42:11',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'hhh',
                'email' => 'nasiruddin@thriwe.com',
                'mobile' => 9716942965,
                'email_verified_at' => NULL,
                'password' => '$2y$10$ARoxjTuxM/W890QpDtjNiuttz6V4cFEpidc/6V5wD96GNowzt/A3K',
                'remember_token' => 'Lo1NVtcSh1byJNnDvefKR1Ev4UrU0hPQgs5NXqmnWRJv3zHCc1rP2gUddfzm',
                'created_at' => '2020-05-17 13:20:15',
                'updated_at' => '2020-05-17 13:20:15',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
            ),
        ));
        
        
    }
}