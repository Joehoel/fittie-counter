<?php

namespace Database\Seeders;

use App\Models\Counter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CounterSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Joël Kuijper',
            'email' => 'joel@example.com',
        ]);
    }
}
