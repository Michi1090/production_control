<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_types')->delete();

        $types = [
            ['name' => 'エンジン'],
            ['name' => 'エアバッグ'],
            ['name' => 'タイヤ'],
        ];

        DB::table('material_types')->insert($types);
    }
}
