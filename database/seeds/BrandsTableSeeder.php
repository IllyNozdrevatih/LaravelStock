<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Accelera','Barum','Continental','Debica','Evergreen',
            'Firestone','Goodyear','Kumho','Mabor','Manerva','Adora','Alu',
            'Adora','Alutec','Disla','Replica','Fondmetal',
            'JT','KFZ','Original','Replay'
        ];

        $insertBrands = [];

        foreach ( $brands as $brand ) {
            array_push($insertBrands, ['name' => $brand]);
        };


        DB::table('brands')->insert($insertBrands);
    }
}
