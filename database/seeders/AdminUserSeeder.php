<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'singhamishasingh21@gmail.com'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('Anii@23sha'),
                'role'     => 'admin',
            ]
        );
    }
}
