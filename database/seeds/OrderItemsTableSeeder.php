<?php

use App\OrderItems;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItems::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'price' => 4000,
        ]);

        OrderItems::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 233,
        ]);

        OrderItems::create([
            'order_id' => 3,
            'product_id' => 3,
            'quantity' => 2,
            'price' => 100,
        ]);
    }
}
