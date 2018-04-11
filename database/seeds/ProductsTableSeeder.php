<?php

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
      DB::table('products')->insert([
         ['name' => 'Tommy Jeans', 'price' => '€45,-', 'description' => 'Jeans from Tommy Hilfinger'],
         ['name' => 'Skinny Jeans', 'price' => '€15,-', 'description' => 'A skinny jeans for a skinny boy'],
         ['name' => 'Blue jeans', 'price' => '€155,-', 'description' => 'A blue jeans with a special suprise'],
         ['name' => 'Kenzo shirt', 'price' => '€225,-', 'description' => 'Shirt from Kenzo'],
         ['name' => 'Primark shirt', 'price' => '€5,-', 'description' => 'A shirt from the primark'],
         ['name' => 'Shirt with holes', 'price' => '€35,-', 'description' => 'This is a shirt with holes'],
         ['name' => 'Tommy jacket', 'price' => '€435,-', 'description' => 'Jack from Tommy Hilfinger'],
         ['name' => 'Leather jacket', 'price' => '€15,-', 'description' => 'A jachet made of leather'],
         ['name' => 'Body jacket', 'price' => '€10,-', 'description' => 'A bodywarmer'],
         ['name' => 'Gym schoes', 'price' => '€105,-', 'description' => 'Shoes for in the gym'],
         ['name' => 'Shirt nike', 'price' => '€79,-', 'description' => 'A sport shirt from nike'],
         ['name' => 'Sport socks', 'price' => '€20,-', 'description' => '3 pairs of sport socks'],
         ['name' => 'Happy socks', 'price' => '€59,-', 'description' => '12 pairs of happy socks'],
     ]);
    }
}
