<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('User')->insert([
           'username' => 'testAdmin',
           'password' => bcrypt('password'),
           'name'     => 'Admin',
           'isAdmin'  => '1'
         ],
         [
            'username' => 'testUser',
            'password' => bcrypt('password'),
            'name'     => 'User',
            'isAdmin'  => '0'
         ]);
    }
}
