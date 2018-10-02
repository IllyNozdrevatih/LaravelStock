<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Шины','Диски'];

        $insertNames = [];
        foreach ( $names as $name){
            array_push($insertNames , [
                'name' =>$name,
                'uuid' => str_random(10),
                'slug' => str_random(10),
                'active' => 'something',
                'page_products_count' => random_int(5,10)
            ]);
        };

        DB::table('categories')->insert($insertNames);
    }
}
