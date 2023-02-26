<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    private const DEFAULT_PASSWORD = '12345678';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'User',
                'email' => 'user@mail',
                'password' => Hash::make(self::DEFAULT_PASSWORD),
            ],
            [
                'name' => 'UserTwo',
                'email' => 'user2@mail',
                'password' => Hash::make(self::DEFAULT_PASSWORD),
            ],
        ]);
    }
}
