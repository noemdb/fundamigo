<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(AdminUserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(PostsCategoryPost::class);
        // $this->call(PostsCategoryFeatured::class);

        $this->call(CategoryLanding::class);
        $this->call(PostCategoryN1Seeder::class);
        $this->call(PostCategoryN2Seeder::class);
        $this->call(PostCategoryN3Seeder::class);
        $this->call(PostCategoryN4Seeder::class);
        $this->call(PostCategoryN5Seeder::class);
        $this->call(PostCategoryN6Seeder::class);
    }
}
