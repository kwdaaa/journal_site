<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        // ArticleTableSeeder（シーダークラス）の呼び出し
        $this->call(ArticleTableSeeder::class);
    }
}
