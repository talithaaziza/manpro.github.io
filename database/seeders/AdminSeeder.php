<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin user
        User::create([
            'name' =>'Admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), //password is'password'
            'is_admin' =>true,
        ]);

        //test user
        User::create([
            'name' =>'Test',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), //password is'password'
            'is_admin' =>false,
        ]);
    }
}
