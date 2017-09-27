<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call(UsersTableSeeder::class);
        //$this->call(BrandsTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
