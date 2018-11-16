<?php

use Illuminate\Database\Seeder;

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
            'username' => 'ananthan',
            'email' => 'ananthang43@gmail.com',
            'phonenumber' => '767219211',
            'role' => 'receptionist',
            'password' => bcrypt('123456'),
        ]);
    }
}
