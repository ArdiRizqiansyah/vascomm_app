<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat user menggunakan faker
        $faker = \Faker\Factory::create('id_ID');

        // role user
        $role = Role::where('name', 'user')->first();

        // cek apakah dalam mode development/local dan jumlah user <= 1
        if (config('app.env') == 'local' && User::count() <= 1) {
            $user_default = [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'phone' => '08987654321',
                'password' => 'user',
            ];

            // simpan user default
            $user = User::create($user_default);

            // berikan role user
            $user->assignRole($role);

            // buat 10 user
            for ($i = 0; $i < 10; $i++) {
                $user = User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'email_verified_at' => now(),
                    'phone' => $faker->phoneNumber,
                    'password' => 'user',
                ]);

                // berikan role user
                $user->assignRole($role);
            }
        }
    }
}
