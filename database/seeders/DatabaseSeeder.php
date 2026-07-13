<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@konsultanpajak.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Ramdan',
            'email' => 'ramdan@konsultanpajak.com',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            CmsSeeder::class,
            PostSeeder::class,
        ]);
    }
}
