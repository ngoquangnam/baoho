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
        //$this->call(UsersTableSeeder::class);
       $this->call(CategoryTableSeeder::class);
       $this->call(ColorTableSeeder::class);
      $this->call(SizeTableSeeder::class);
        //$this->call(MaterialTableSeeder::class);
    }
}
