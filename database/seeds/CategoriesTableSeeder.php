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
            [
            'id' => 1,
            'categorie' => 'フロントエンド',
            'sort' => 1,
            'comment' => '',
            'color' => 'primary'
            ],[
            'id' => 2,
            'categorie' => 'バックエンド',
            'sort' => 2,
            'comment' => '',
            'color' => 'success'
            ],[
            'id' => 3,
            'categorie' => 'DB',
            'sort' => 3,
            'comment' => '',
            'color' => 'secondary'
            ],[
            'id' => 4,
            'categorie' => 'デザイン',
            'sort' => 4,
            'comment' => '',
            'color' => 'warning'
            ],[
            'id' => 5,
            'categorie' => 'インフラ・サーバー',
            'sort' => 5,
            'comment' => '',
            'color' => 'info'
            ],[
            'id' => 6,
            'categorie' => 'その他',
            'sort' => 6,
            'comment' => '',
            'color' => 'danger'
            ]
        ]);
    }
}
