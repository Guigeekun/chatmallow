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
        DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin'),
          'api_token' => str_random(30),
        ]);

        DB::table('cats')->insert([
          'name' => 'chatmallow',
          'icon' => '1',
          'badgeid' => str_random(30),
          'allowedfood' => '5',
        ]);
        //factory(App\User::class, 2)->create();
    }
}
