<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'admin',
        ];

        // cek apakah ada data admin
        if (User::where('email', $data['email'])->count() == 0) {
            $user = User::create($data);
            $user->assignRole('admin');
        }
    }
}
