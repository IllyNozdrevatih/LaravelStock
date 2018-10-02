<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Type;
use App\Product;
use App\Category;
use App\Characteristic;
use App\ValueCharacteristic;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory(Brand::class, 50)->create();
//        factory(Type::class, 50)->create();
//        factory(Category::class, 50)->create();
//        factory(Product::class, 50)->create();
//        factory(Characteristic::class, 50)->create();
//        factory(ValueCharacteristic::class, 50)->create();
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
