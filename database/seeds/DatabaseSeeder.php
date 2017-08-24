<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('OAuthClientSeeder');
        // $this->call('UsersTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // UsersTableSeeder::truncate();
        // PostTableSeeder::truncate();
        // CommentTableSeeder::truncate();
        factory(App\User::class, 10)->create();
        factory(App\Post::class, 50)->create();
        factory(App\Comment::class, 100)->create();
        // Enable it back
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }// database/seeds/DatabaseSeeder.php

}
