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
          'name' => 'lawl',
          'icon' => '2',
          'badgeid' => 'fgrey5542bc',
          'allowedfood' => '14',
        ]);
        DB::table('cats')->insert([
          'name' => 'lawl',
          'icon' => '2',
          'badgeid' => 'fgrey5542bc',
          'allowedfood' => '14',
        ]);
        DB::table('cats')->insert([
          'name' => 'lawl',
          'icon' => '2',
          'badgeid' => 'fgrey5542bc',
          'allowedfood' => '14',
        ]);
        DB::table('cats')->insert([
          'name' => 'lawl',
          'icon' => '2',
          'badgeid' => 'fgrey5542bc',
          'allowedfood' => '14',
        ]);


      /*  Model::unguard();

        factory('App\Cat',10)->create();

        Model::reguard(); */
        //factory(App\User::class, 2)->create();
    }
}
