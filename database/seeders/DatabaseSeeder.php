<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\Product::insert([
            ['name' => 'Paket 1 Keping', 'quota' => 1, 'price' => 10500, 'description' => 'Mendapatkan 1 e-meterai untuk dokumen Anda.'],
            ['name' => 'Paket 5 Keping', 'quota' => 5, 'price' => 52500, 'description' => 'Mendapatkan 5 e-meterai untuk dokumen Anda.'],
            ['name' => 'Paket 10 Keping', 'quota' => 10, 'price' => 105000, 'description' => 'Mendapatkan 10 e-meterai untuk dokumen Anda.'],
        ]);
    }
}
