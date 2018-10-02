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
        $brands_tires = [
            'Accelera','Barum','Continental','Debica','Evergreen',
            'Firestone','Goodyear','Kumho','Mabor','Manerva','Adora','Alu'
        ];

        $brands_disks = [
            'Adora','Alutec','Disla','Replica','Fondmetal',
            'JT','KFZ','Original','Replay'
        ];
        $insertBrandsTires = [];

        foreach ( $brands_tires as $brand ) {
            array_push($insertBrandsTires, ['name' => $brand , 'category_id' => 1]);
        };

        $insertBrandsDisks = [];
        foreach ( $brands_disks as $brand ) {
            array_push($insertBrandsDisks , ['name'=> $brand , 'category_id' => 2]);
        };


        DB::table('brands')->insert($insertBrandsTires);

        DB::table('brands')->insert($insertBrandsDisks);

    }
}
