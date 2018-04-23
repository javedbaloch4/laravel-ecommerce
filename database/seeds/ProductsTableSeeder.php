<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LENOVO prenosnik Yoga 900 13ISK',
            'price' => '2000',
            'description' => 'This is some text for the LENOVO prenosnik Yoga 900 13ISK',
            'image' => '01.jpg',
        ]);

        Product::create([
            'name' => 'Macbook',
            'price' => '233',
            'description' => 'This is some text for the Macbook',
            'image' => '02.jpg',
        ]);

        Product::create([
            'name' => 'Ployster Beg',
            'price' => '50',
            'description' => 'This is some text for the Ployster Beg',
            'image' => '03.jpg',
        ]);

        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '04.jpg',
        ]);
    }
}
