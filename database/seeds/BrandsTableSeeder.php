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

        foreach ( $brands_tires as $brand ) {
            DB::table('brands')->insert([
                'name' =>$brand,
                'category_id'=>1
            ]);
        }


        foreach ( $brands_disks as $brand ) {
            DB::table('brands')->insert([
                'name' =>$brand,
                'category_id'=>2
            ]);
        }
    }
}
