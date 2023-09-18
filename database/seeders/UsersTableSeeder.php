<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'is_superuser' => 1,
                'is_active' => 0,
                'password' => Hash::make('Admin123!'), 
                'date_joined' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'is_superuser' => 0,
                'is_active' => 0,
                'password' => Hash::make('User123!'),
                'date_joined' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
