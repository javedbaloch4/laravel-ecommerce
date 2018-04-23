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
         $this->call(AdminUserSeeder::class);
         $this->call(OrderItemsTableSeeder::class);
         $this->call(OrderTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
