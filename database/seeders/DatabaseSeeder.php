<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'id' => 1,
        //     'title' => 'Senior Software Engineer',
        //     'tags' => 'PHP, Laravel, Vue.js, Tailwind CSS',
        //     'company' => 'Laravel Jobs',
        //     'location' => 'Remote',
        //     'email' => 'test@test.com',
        //     'website' => 'https://laraveljobs.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl sed aliquam ultricies, nunc sapien ultricies nunc, vitae al',
        // ]);

        // Listing::create(
        //     [
        //         'id' => 2,
        //         'title' => 'Junior Software Engineer',
        //         'tags' => 'PHP, Laravel, Vue.js, Tailwind CSS',
        //         'company' => 'Laravel Jobs',
        //         'location' => 'Remote',
        //         'email' => '',
        //         'website' => 'https://laraveljobs.com',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl sed aliquam ultricies, nunc sapien ultricies nunc, vitae al',
        //     ]
        // );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}