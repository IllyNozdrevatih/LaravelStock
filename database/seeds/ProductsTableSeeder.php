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
        for($i = 0 ; $i < 100; $i++){
            DB::table('products')->insert([
                'brand_id' => random_int(1,9),
                'type_id' => random_int(1,5),
                'uuid' => str_random(10),
                'slug' => str_random(10),
                'category_id' => 1,
                'price' => 200,
                'active' => 'something'
            ]);
        }
        for($i = 0 ; $i < 100; $i++) {
            DB::table('products')->insert([
                'brand_id' => random_int(13,20),
                'type_id' => random_int(10,13),
                'uuid' => str_random(10),
                'slug' => str_random(10),
                'category_id' => 2,
                'price' => 200,
                'active' => 'something'
            ]);
        }
    }
}
