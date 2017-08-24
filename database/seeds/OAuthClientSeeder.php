<?php

use Illuminate\Database\Seeder;

class OAuthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('oauth_clients')->truncate();

        for ($i=1; $i < 11; $i++){

            DB::table('oauth_clients')->insert(
                [   'id' => "$i",
                    'secret' => "secret$i",
                    'name' => "Test Client $i"
                ]
            );
        }
    }
}
