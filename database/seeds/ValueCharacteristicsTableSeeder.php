<?php

use Illuminate\Database\Seeder;

class ValueCharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //характеристики шин
        $values_ch_1 = ['R13', 'R14', 'R15', 'R16', 'R17'];
        $values_ch_2 = [];
        $values_ch_3 = [];
        for ($i = 4; $i <= 8; $i = $i + 0.5) {
            array_push($values_ch_2, $i);
        };

        for ($i = 40; $i <= 80; $i = $i + 5) {
            array_push($values_ch_3, $i);
        };

        $values_ch_4 = ['Летние', 'Зимние', 'Всесезонные'];
        $values_ch_5 = ['Шип', 'Не шип', 'Под шип'];

        //характеристики дисков
        $values_ch_7 = [];
        for($i = 4 ; $i <= 8 ; $i = $i + 0.5){
            array_push($values_ch_7,$i);
        };
        $values_ch_8 = ['4x98','4x100','5x100','5x104','5x114'];
        $values_ch_9 = ['Черный','GM','MS','gold','chrome','FCGl'];

        $insertValues = [];
        //заполнение шин
        for($i = 1 ; $i <= 100;$i++) {
            array_push($insertValues ,[
                'characteristic_id' => 1,
                'product_id' => $i,
                'value' => $values_ch_1[random_int(0,4)]
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 2,
                'product_id' => $i,
                'value' => $values_ch_2[random_int(0,8)]
            ]);


            array_push($insertValues ,[
                'characteristic_id' => 3,
                'product_id' => $i,
                'value' => $values_ch_3[random_int(1,5)]
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 4,
                'product_id' => $i,
                'value' => $values_ch_4[random_int(0,2)]
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 5,
                'product_id' => $i,
                'value' => $values_ch_5[2]
            ]);

        }

        //заполнение дисков
        for($i = 101;$i <= 200;$i++){
            $insertDisks = [];
            array_push($insertValues ,[
                'characteristic_id' => 1,
                'product_id' => $i,
                'value' => $values_ch_1[random_int(0,4)]
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 6,
                'product_id' => $i,
                'value' => $values_ch_7[random_int(0,7)]
            ]);


            array_push($insertValues ,[
                'characteristic_id' => 7,
                'product_id' => $i,
                'value' => $values_ch_8[random_int(0,4)]
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 8,
                'product_id' => $i,
                'value' => random_int(40,90)
            ]);

            array_push($insertValues ,[
                'characteristic_id' => 9,
                'product_id' => $i,
                'value' => $values_ch_9[random_int(0,5)]
            ]);
        };

        DB::table('value_characteristics')->insert($insertValues);
    }
}
