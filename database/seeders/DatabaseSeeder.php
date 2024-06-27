<?php

namespace Database\Seeders;

use App\Models\Cour;
use App\Models\Inscription;
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
        // User::factory(10)->create();

        User::factory(10)->create();
        Cour::factory(5)->create();
        Inscription::factory(10)->create();

    }
}
