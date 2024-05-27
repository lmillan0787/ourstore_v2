<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $users = [
        [
            'name' => 'Admin',
            'email' => 'admin@ourstore.com',
            'password' => Hash::make('admin') // password
        ],
        [
            'name' => 'User',
            'email' => 'user@ourstore.com',
            'password' => Hash::make('user') // password
        ]

       ];

       foreach ($users as $user) {
            User::create($user);
       }
    }
}
