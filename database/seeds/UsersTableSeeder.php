<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Administrator',
            'email' => 'admin@library.dev',
            'role' => 'admin',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('rahasia')
        ]);

        DB::table('users')->insert([
            'name' => 'Akhdan Ganteng',
            'email' => 'user@library.dev',
            'role' => 'user',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('rahasia1')
        ]);
    }
}
