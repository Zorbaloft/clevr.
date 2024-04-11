<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 8315e5486cbf3f9da77507696f09c210ef9218ff
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 8315e5486cbf3f9da77507696f09c210ef9218ff
    }
}
