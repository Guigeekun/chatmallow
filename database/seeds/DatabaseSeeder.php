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
        DB::table('users')->delete();
        DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin'),
          'api_token' => 'AZERTYUIOP',
        ]);

        DB::table('cats')->delete();
        factory('App\Cat', 10)->create();

        DB::table('actions')->delete();
        factory('App\Actions', 5)->create();

      /*  Model::unguard();*/


        /*Model::reguard(); */
        //factory(App\User::class, 2)->create();
    }
}
