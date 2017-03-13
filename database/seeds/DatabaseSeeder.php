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
          'api_token' => str_random(30),
        ]);

        DB::table('cats')->delete();
        factory('App\Cat', 10)->create();

        DB::table('actions')->delete();
        DB::table('actions')->insert([
          'type' => '4',
          'devices_id' => '1',
          'executed' => '0',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

      /*  Model::unguard();*/


        /*Model::reguard(); */
        //factory(App\User::class, 2)->create();
    }
}
