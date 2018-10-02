<?php

use Illuminate\Database\Seeder;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characteristics = [ 'Диаметр','Ширина','Профиль','Сезон','Шипы','Ширина Диска','PCD','DIA','Цвет'];

        foreach ( $characteristics as $characteristic )
            DB::table('characteristics')->insert([
                'name' => $characteristic,
                'slug' => str_random(10),
                'multiple' => '0',
            ]);
    }

}
