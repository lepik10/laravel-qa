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
        $this->call([
            UsersQuestionsAnswerTableSeeder::class,
            FavoritesTableSeeder::class,
            VotablesTableSeeder::class
        ]);

    }
}
