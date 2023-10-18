<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat user menggunakan faker
        $faker = \Faker\Factory::create('id_ID');

        // cek apakah dalam mode development/local dan jumlah produk < 1
        if (config('app.env') == 'local' && Product::count() < 1) {
            for ($i = 0; $i < 20; $i++) {
                Product::create([
                    'name' => $faker->word(),
                    'price' => $faker->numberBetween(10000, 100000),
                    'stock' => $faker->numberBetween(1, 100),
                ]);
            }
        }
    }
}
