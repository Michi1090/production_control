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
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(MaterialTypeSeeder::class);
        $this->call(SupplierSeeder::class);
    }
}
