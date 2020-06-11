<?php

use Illuminate\Database\Seeder;

class SupercategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Оборудование',
        ]);
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Одежда женская',
        ]);
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Массаж',
        ]);
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Чехлы и сумки',
        ]);
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Одежда мужская',
        ]);
        DB::table('supercategory')->insert([
            'supercategory_name' => 'Йога-гамаки',
        ]);
    }
}
