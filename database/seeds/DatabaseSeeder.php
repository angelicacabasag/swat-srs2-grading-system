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
        // $this->call(UsersTableSeeder::class);
      \App\User::insert([
          'id' => 1,
          'username' => 'admin',
          'password' => Hash::make('admin'),
      ]);
    }
}
