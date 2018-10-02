<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types_tires = [
            'Alpha','Platinum','Green Ace','Sport Green','AZ850','Optima A1','G-Force R1',
            'Rugged Terrain T/A','GPR300','ContilceContact HD'
        ];

        $types_disks = [
            'GN23 S','KI52 BKF','LR55 HP','MI102 S','B81','H-290 GMFP','H-344 HS',
            'H-531','BKFP','KAP','Kapitan B'
        ];

        $insertTires = [];
        $insertDisks = [];

        foreach ($types_tires as $type){
            array_push($insertTires ,[
                'name' => $type,
                'brand_id' => random_int(1,12)
            ]);
        }

        foreach ($types_disks as $type){
            array_push($insertDisks ,[
                'name' => $type,
                'brand_id' => random_int(13,20)
            ]);
        }

        DB::table('types')->insert($insertTires);
        DB::table('types')->insert($insertDisks);
    }
}
