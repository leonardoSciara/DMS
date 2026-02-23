<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@dms.local'],
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user@dms.local'],
            [
                'name' => 'Test User',
                'username' => 'testuser',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );
    }
}
