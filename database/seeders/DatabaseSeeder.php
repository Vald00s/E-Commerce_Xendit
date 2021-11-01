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
        $this->call([ProfilesSeeder::class, ProductsSeeder::class, StockSeeder::class, RemindersSeeder::class]);
    }
}
