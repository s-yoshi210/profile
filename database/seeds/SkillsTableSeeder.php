<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'id' => 1,
            'categorie_id' => 1,
            'technology' => 'JavaScript',
            'years' => 5,
        ]);
        DB::table('skills')->insert([
            'id' => 2,
            'categorie_id' => 1,
            'technology' => 'jQuery',
            'years' => 5,
        ]);
        DB::table('skills')->insert([
            'id' => 3,
            'categorie_id' => 2,
            'technology' => 'PHP',
            'years' => 7,
        ]);
        DB::table('skills')->insert([
            'id' => 4,
            'categorie_id' => 3,
            'technology' => 'MySQL',
            'years' => 7,
        ]);
        DB::table('skills')->insert([
            'id' => 5,
            'categorie_id' => 4,
            'technology' => 'HTML',
            'years' => 7,
        ]);
        DB::table('skills')->insert([
            'id' => 6,
            'categorie_id' => 4,
            'technology' => 'CSS',
            'years' => 7,
        ]);
        DB::table('skills')->insert([
            'id' => 7,
            'categorie_id' => 5,
            'technology' => 'Linux',
            'years' => 3,
        ]);
    }
}
