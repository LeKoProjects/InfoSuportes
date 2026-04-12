<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate([
            'email' => env('ADMIN_EMAIL', 'admin@bookmarket.local'),
        ], [
            'name' => env('ADMIN_NAME', 'Owner'),
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_PASSWORD', '12345678')),
        ]);
    }
}
