<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'avatar' => 'https://res.cloudinary.com/dsjm9vjh1/image/upload/v1716480474/dfsxdhhc39ynoiooasgx.png',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            CareerSeeder::class,
        ]);
    }
}
