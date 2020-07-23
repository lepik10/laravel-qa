<?php

use Illuminate\Database\Seeder;

class UsersQuestionsAnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('answers')->delete();
        \DB::table('questions')->delete();
        \DB::table('users')->delete();

        factory('App\User', 3)->create()->each(function($u) {
            $u->questions()->saveMany(factory('App\Question', rand(1, 5))->make())->each(function($q) {
                $q->answers()->saveMany(factory('App\Answer', rand(1, 5))->make());
            });
        });
    }
}
