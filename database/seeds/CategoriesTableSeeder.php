<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        Category::insert([
            [
                'cat_name' => 'C语言',
                'updated_at' => $date,
                'created_at' => $date
            ],
            [
                'cat_name' => 'C++语言',
                'updated_at' => $date,
                'created_at' => $date
            ],
            [
                'cat_name' => 'Linux',
                'updated_at' => $date,
                'created_at' => $date
            ],
            [
                'cat_name' => '数据库',
                'updated_at' => $date,
                'created_at' => $date
            ],
            [
                'cat_name' => '数据结构',
                'updated_at' => $date,
                'created_at' => $date
            ]
        ]);
    }
}
