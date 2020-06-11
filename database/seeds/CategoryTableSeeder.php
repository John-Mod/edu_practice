<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supercategories = [1, 2, 3, 4, 5, 6];
        $categories = [
            ['Коврики для йоги', 'Опорные блоки', "Ремни и верёвки", "Йога-колёса", "Пледы и одеяла"],
            ["Топы и майки", "Футболки", "Лосины", "Бриджи и шорты"],
            ['Роллеры', "Аппликаторы", "Массажёры", "Массажные шарики"],
            ['Сумки для ковриков', "Чехлы для ковриков", "Стяжки для ковриков"],
            ["Футболки и майки", "Брюки и штаны", "Шорты и бриджи"],
            ['Гамаки', 'Полотна', 'Крепления']
        ];

        foreach ($supercategories as $s_id){
            foreach ($categories[$s_id-1] as $item){
                DB::table('category')->insert([
                    'supercategory_id' => $s_id,
                    'category_name' => $item,
                ]);
            }
        }
    }
}
