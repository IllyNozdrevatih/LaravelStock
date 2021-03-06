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
        $this->call([
            CategoriesTableSeeder::class,
            BrandsTableSeeder::class,
            TypesTableSeeder::class,
            ProductsTableSeeder::class,
            CharacteristicsTableSeeder::class,
            ValueCharacteristicsTableSeeder::class,
        ]);
    }
}
