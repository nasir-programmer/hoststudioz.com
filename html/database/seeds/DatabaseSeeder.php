<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(EnumsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(EnquiryTableSeeder::class);
    }
}
