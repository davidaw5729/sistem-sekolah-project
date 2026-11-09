<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's Ethan's ( if you read this please inform it to me) database.
     */
    public function run(): void
    {
        $this->call([
            ClassSeeder::class,
            MajorSeeder::class,
            StudentSeeder::class,
            
        ]);

      
    }
}
