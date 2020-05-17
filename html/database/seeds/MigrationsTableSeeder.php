<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2020_05_15_000106_create_payments_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_05_03_000001_create_customer_columns',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2019_05_03_000002_create_subscriptions_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2020_05_16_071050_create_users_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2020_05_16_071050_create_password_resets_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2020_05_16_071050_create_services_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2020_05_16_071050_create_payments_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2020_05_16_071050_create_products_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2020_05_16_071050_create_enums_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2020_05_16_071051_add_foreign_keys_to_services_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2020_05_16_071051_add_foreign_keys_to_payments_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2020_05_16_071051_add_foreign_keys_to_enums_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2020_05_16_071514_create_enums_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2020_05_16_071514_create_password_resets_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2020_05_16_071514_create_payments_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2020_05_16_071514_create_products_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2020_05_16_071514_create_services_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2020_05_16_071514_create_subscriptions_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2020_05_16_071514_create_users_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2020_05_16_071516_add_foreign_keys_to_enums_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2020_05_16_071516_add_foreign_keys_to_payments_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2020_05_16_071516_add_foreign_keys_to_services_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2020_05_16_072815_create_enums_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2020_05_16_072815_create_password_resets_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2020_05_16_072815_create_payments_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2020_05_16_072815_create_products_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2020_05_16_072815_create_services_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2020_05_16_072815_create_subscriptions_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2020_05_16_072815_create_users_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2020_05_16_072816_add_foreign_keys_to_enums_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2020_05_16_072816_add_foreign_keys_to_payments_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2020_05_16_072816_add_foreign_keys_to_services_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2020_05_16_171553_create_jobs_table',
                'batch' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2020_05_16_183337_create_enums_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2020_05_16_183337_create_jobs_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2020_05_16_183337_create_password_resets_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2020_05_16_183337_create_payments_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2020_05_16_183337_create_products_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2020_05_16_183337_create_services_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2020_05_16_183337_create_subscriptions_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2020_05_16_183337_create_users_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2020_05_16_183338_add_foreign_keys_to_enums_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2020_05_16_183338_add_foreign_keys_to_payments_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2020_05_16_183338_add_foreign_keys_to_services_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2020_05_16_183756_create_enums_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2020_05_16_183756_create_jobs_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2020_05_16_183756_create_password_resets_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2020_05_16_183756_create_payments_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2020_05_16_183756_create_products_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2020_05_16_183756_create_services_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2020_05_16_183756_create_subscriptions_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2020_05_16_183756_create_users_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2020_05_16_183757_add_foreign_keys_to_enums_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2020_05_16_183757_add_foreign_keys_to_payments_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2020_05_16_183757_add_foreign_keys_to_services_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2020_05_17_104607_create_enquiry_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2020_05_17_104607_create_enums_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2020_05_17_104607_create_jobs_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2020_05_17_104607_create_password_resets_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2020_05_17_104607_create_payments_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2020_05_17_104607_create_products_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2020_05_17_104607_create_services_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2020_05_17_104607_create_subscriptions_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2020_05_17_104607_create_users_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2020_05_17_104609_add_foreign_keys_to_enums_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2020_05_17_104609_add_foreign_keys_to_payments_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2020_05_17_104609_add_foreign_keys_to_services_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}