<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Candidate\Database\Seeders\CandidateDatabaseSeeder;
use Modules\Users\Database\Seeders\UsersDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersDatabaseSeeder::class,
            CandidateDatabaseSeeder::class
        ]);
    }
}
