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
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('rahasia')
        ]);
    }
}
