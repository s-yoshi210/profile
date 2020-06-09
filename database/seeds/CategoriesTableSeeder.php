<?php

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
        DB::table('categories')->insert([
            'id' => 1,
            'categorie' => 'フロントエンド',
            'sort' => 1,
            'comment' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'categorie' => 'バックエンド',
            'sort' => 2,
            'comment' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'categorie' => 'DB',
            'sort' => 3,
            'comment' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'categorie' => 'デザイン',
            'sort' => 4,
            'comment' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'categorie' => 'インフラ・サーバー',
            'sort' => 5,
            'comment' => '',
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'categorie' => 'その他',
            'sort' => 6,
            'comment' => '',
        ]);
    }
}
