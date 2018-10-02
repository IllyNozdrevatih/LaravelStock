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

        $insertCharacteristics = [];
        foreach ( $characteristics as $characteristic ) {
            array_push($insertCharacteristics ,[
                'name' => $characteristic,
                'slug' => str_random(10),
                'multiple' => '0',
            ]);
        };

        DB::table('characteristics')->insert($insertCharacteristics);

    }

}
